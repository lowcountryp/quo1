<?php

$phone = filter_input(INPUT_POST, 'qphone');
$company = filter_input(INPUT_POST, 'qcompName');
$company = strtoupper($company);

$qaddr1 = filter_input(INPUT_POST, 'qaddr1');
$qaddr2 = filter_input(INPUT_POST, 'qaddr2');
$qcity = filter_input(INPUT_POST, 'qcity');
$qstate = filter_input(INPUT_POST, 'qstate');
$qzipcode = filter_input(INPUT_POST, 'qzipcode');

/* These are the variable that tell the subject of the email and where the email will be sent. */
$emailSubject = 'REQUEST FOR QUOTE: ';
$emailSubject .= filter_input(INPUT_POST, 'qcompName');

/* These will gather what the user has typed into the field and were passed in $_POST. */
$name = filter_input(INPUT_POST, 'fullName');
$email = filter_input(INPUT_POST, 'qemail');
$LvEmail = 'test@lpt-i.com';  //the Livingston email account to receive the quote

$comments = $_POST['qmessage'];
$quo = "Q_" . filter_input(INPUT_POST, 'hiddenQuoteID');

$xc = filter_input(INPUT_POST, 'hLineCount'); //count of detail lines - used for looping

$ftype = '.html';
$ftype2 = '.csv';
$file = "Q_" . filter_input(INPUT_POST, 'hiddenQuoteID') . $ftype;
$file2 = "Q_" . filter_input(INPUT_POST, 'hiddenQuoteID') . $ftype2;

$f = fopen($file, 'a+');

$body = <<<EOD
<br><hr><br><H2>
QUOTEID: $quo <br>        
Company: $company <br>
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
Comments: $comments <br></H2>
<br><hr><br><H3>SEE ATTACHMENT</H3><br>
EOD;
fwrite($f, $body);
fclose($f);

/* now build the .csv */
$list = array(
  array("QUOTE ID: ", $quo),
  array("COMPANY: ", $company),
  array("SUBMITTER: ", $name),
  array("PHONE: ", $phone),
  array("ADDRESS: ", $qaddr1, $qaddr2),
  array("CITY/STATE: ", $qcity, $qstate, $qzipcode),
  array(" "),
  array("NUMBER OF LINES: ", $xc),
  array(" "),
  array("COMMENTS: ", $comments),
  array(" "),  
  array("LIN#", "PRODUCT", "QTY", "OD-1", "OD-2", "WALL", "TYPE", "GRADE", "LENGTH", "TOLERANCE", "THREAD", "BEVEL", "THREAD/BEVEL")
);

$f2 = fopen($file2, 'w');

foreach ($list as $fields) {
    fputcsv($f2, $fields);
}

for ($r = 1; $r <= $xc; $r++) {
    $vL = filter_input(INPUT_POST, 'lin_' . $r);
    $vP = filter_input(INPUT_POST, 'prd_' . $r);
    $vQ = filter_input(INPUT_POST, 'qty_' . $r);
    $vO1 = filter_input(INPUT_POST, 'odia1_' . $r);
    $vO2 = filter_input(INPUT_POST, 'odia2_' . $r);
    $vW = filter_input(INPUT_POST, 'wall_' . $r);
    $vT = filter_input(INPUT_POST, 'type_' . $r);
    $vG = filter_input(INPUT_POST, 'grade_' . $r);
    $vLen = filter_input(INPUT_POST, 'length_' . $r);
    $vTol = filter_input(INPUT_POST, 'ctolerance_' . $r);
    $vThd = filter_input(INPUT_POST, 'cthreaded_' . $r);
    $vBvl = filter_input(INPUT_POST, 'cbeveled_' . $r);
    $vTBTy = filter_input(INPUT_POST, 'thrdbevltype_' . $r);
    $list = array(
      array($vL, $vP, $vQ, $vO1, $vO2, $vW, $vT, $vG, $vLen, $vTol, $vThd, $vBvl, $vTBTy)
    );
    foreach ($list as $fields) {
        fputcsv($f2, $fields);
    }
}

fclose($f2);
/* * ******************************************************************************* */
//**Code to send html email with attached excel in php:**

$file_name = $file2;

//$to = $LvEmail;
$to = $LvEmail . "," . $email;
$from = "From: Livingston Quote <livingt8@server.lpt-i.com>";
$subject = $emailSubject;
$message = $body;
$headers = "From: $from";
$headers .= "cc: $LvEmail";

//$headers = "From: " . $LvEmail;
//$headers .= "cc: " . $email;
// boundary 
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// multipart boundary 
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $body . "\n\n";
$message .= "--{$mime_boundary}\n";

$file_size = filesize($file2);
$file = fopen($file2, "rb");
$data = fread($file, $file_size);
fclose($file);

$data = chunk_split(base64_encode($data));
//$name = $files[$x]['name'];
$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$file2\"\n" .
     "Content-Disposition: attachment;\n" . " filename=\"$file2\"\n" .
     "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
$message .= "--{$mime_boundary}\n";

// send
$success = mail($to, $subject, $message, $headers);
//$ok = mail($to, $subject, $message, $headers);
if ($success) {
    echo "<p> $quo  message received from $email!</p>";
} else {
    echo "<p>. $quo message not sent!</p>";
}
?>