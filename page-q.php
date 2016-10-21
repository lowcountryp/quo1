<?php
/*
  Template Name: q
 */
?>

<?php if (is_front_page()) { ?>
    <?php get_template_part('home'); ?>
<?php } else { ?> 
    <?php get_header(); ?>
    <!-- Latest compiled and minified CSS -->
    <!doctype html>
    <html>
       <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700' />
          <link rel='stylesheet' href='http://mycompany.com/wp-content/themes/theme_Name/bootstrap.css' />
          <link rel='stylesheet' href='http://mycompany.com/wp-content/themes/theme_Name/bootstrap-select.css' />
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' />         
          <link rel='stylesheet' href='http://mycompany.com/wp-content/themes/theme_Name/bootstrap_extend.css' />           
          <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
          <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>          
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <script src="http://mycompany.com/wp-content/themes/theme_Name/bootstrap-select.js"></script>
<!--
            <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="http://www.mycompany.com/wp-content/themes/theme_Name/bootstrap-select.js"></script>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700' />
            <link rel='stylesheet' href='http://www.mycompany.com/wp-content/themes/theme_Name/bootstrap.css' />
            <link rel='stylesheet' href='http://www.mycompany.com/wp-content/themes/theme_Name/bootstrap-select.css' />
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' />         
            <link rel='stylesheet' href='http://www.mycompany.com/wp-content/themes/theme_Name/bootstrap_extend.css' />           
          -->
       </head>
       <body>
          <header class="well">
             <div class="container bootstrap-iso">
                <div class="row">
                   <div class="col-xs-15 col-md-15"> 
                      <blockquote>
                         <ul class="list-group">
                            <li class="list-group-item list-group-item-success">Enter the quote information including shipping and contact information.</li>
                            <li class="list-group-item list-group-item-info">Press the SUBMIT QUOTE button.</li>
                            <li class="list-group-item list-group-item-warning">Your quote will be processed within 24 hours.</li>
                         </ul> 
                         <div class="msgToUser text-center">
                            <p>FOR ROUND: OD-1=OUTSIDE DIMENSION<br>FOR RECTANGULAR: OD-1=OUTSIDE DIMENSION OF HEIGHT, OD-2=OUTSIDE DIMENSION OF WIDTH</p>
                         </div>
                      </blockquote>
                   </div>
                </div>
             </div>
          </header>
          <div class="main">
             <div class="container-fluid bootstrap-iso">
                <div class="row">
                   <form class="form" data-toggle="validator" role="form" id="qform" name="quoteform" enctype="multipart/form-data">
                      <input type="hidden" id="hQLineCount" value="" name="hLineCount" class="hiddenField"/>                             
                      <div class="multi-labels qLabel text-center">
                         <div class="col-xs-01 col-md-01 text-center">
                            <label for="lin_">LIN#</label>
                         </div>    
                         <div class="col-xs-2 col-md-2 text-center">
                            <label for="prd_">PRODUCT</label>
                         </div>
                         <div class="col-xs-1 col-md-1 text-center">
                            <label for="qty_">QTY</label>                                          
                         </div>                                     
                         <div class="col-xs-1">
                            <label for="odia1_" >OD-1</label>                                          
                         </div>  
                         <div class="col-xs-1">
                            <label for="odia2_" >OD-2</label>                                                                                  
                         </div>
                         <div class="col-xs-1">
                            <label for="wall_" >WALL</label>                                          
                         </div>
                         <div class="col-xs-1">
                            <label for="type_" >TYPE</label>                                          
                         </div> 
                         <div class="col-xs-1">
                            <label for="grade_">GRADE</label>                                          
                         </div>
                         <div class="col-xs-1">
                            <label for="length_">LENGTH</label>  
                         </div>
                         <div class="col-xs-1 text-center">
                            <label for="ctolerance_">TOLERANCE</label>                                          
                         </div>
                         <!--                                                                        ==> ONLY IF PRODUCT = 'PIPE'                                     -->
                         <div class="col-xs-1">
                            <label for="cthreaded_" class="control-label">THREAD</label>                                          
                         </div>
                         <!--                                                                        ==> ONLY IF PRODUCT = 'PIPE' -->
                         <div class="col-xs-1">
                            <label for="cbeveled_" class="control-label">BEVEL</label>                                          
                         </div>   
                         <div class="form-group col-xs-2 col-md-2">
                            <label for="thrdbevltype_">THREAD/BEVEL</label>
                         </div>
                         <div class="col-xs-1">                                        
                            <label for="delrow">ACTION</label>
                         </div>                                    
                      </div>                            
                      <div class="xmulti-field-wrapper"> 
                         <div class="xmulti-fields">
                            <div id="xmulti-field-0" class="xmulti-0">
                               <div id="rowfields" class="col-xs-16 col-md-16 xrowfields"> 
                                  <div class="form-group">
                                     <input type="hidden" id="actualLineNumber" value="" name="hActualLineNumber" class="hiddenField"/> 
                                  </div>                                            
                                  <div class="col-xs-01 col-md-01">
                                     <input type="text" class="form-control lineCount" id="lin_1" readonly style="margin: 0 0;"  value=" " name="lin_" placeholder="0">
                                  </div>                                  
                                  <div class="form-group col-xs-2 col-md-2">
                                     <select class="form-control col-xs-2 col-md-2 xOnPrdCh" id="prd_1" name="prd_" placeholder="Choose One:">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="StructuralSquare">Structural Square</option>
                                        <option value="StructuralRectangular">Structural Rectangular</option>
                                        <option value="Pipe">Pipe</option>
                                        <option value="MechanicalSquare">Mechanical Square</option>
                                        <option value="MechanicalRectangular">Mechanical Rectangular</option>
                                        <option value="MechanicalRound">Mechanical Round</option>
                                        <option value="OtherProd">Other</option>
                                     </select>
                                  </div>
                                  <div class="col-xs-1 col-md-1">
                                     <input type="text" name="qty_1" style="margin: 0 0;" id="qty_1" class="form-control" placeholder="0">
                                  </div> 
                                  <div class="col-xs-1">
                                     <input type="text" name="odia1_1" style="margin: 0 0;" id="odia1_1" class="form-control" placeholder="0">
                                  </div>
                                  <div class="col-xs-1">
                                     <input type="text" name="odia2_1" style="margin: 0 0;" id="odia2_1" class="form-control" placeholder="0">
                                  </div>
                                  <div class="col-xs-1">
                                     <input type="text" name="wall_1" style="margin: 0 0;" id="wall_1" class="form-control" placeholder="0">
                                  </div>
                                  <div class="col-xs-1">
                                     <input type="text" name="type_1" style="margin: 0 0;" id="type_1" class="form-control" placeholder="TYPE">
                                  </div>
                                  <div class="col-xs-1">
                                     <input type="text" name="grade_1" style="margin: 0 0;" id="grade_1" class="form-control" placeholder="GRADE">
                                  </div>
                                  <div class="col-xs-1">
                                     <input type="text" name="length_1" style="margin: 0 0;" id="length_1" class="form-control" placeholder="0">
                                  </div>
                                  <div class="col-xs-1">
                                     <input type="text" name="ctolerance_1" style="margin: 0 0;" id="ctolerance_1" class="form-control" placeholder="0">
                                  </div>
                                  <div class="col-xs-1">
                                     <select name="cthreaded_1" style="right-padding: 6x;"  class="form-control col-xs-2 col-md-2 xCondByPipe condThread" id="cthreaded_1">
                                        <option value="NOT THREADED" selected="">No</option>
                                        <option value="THREADED">Yes</option>
                                     </select>
                                  </div>
                                  <div class="col-xs-1">
                                     <select name="cbeveled_1" style="right-padding: 6x;" class="form-control col-xs-2 col-md-2 xCondByPipe condBevel" id="cbeveled_1">
                                        <option value="NOT BEVELED" selected="">No</option>
                                        <option value="BEVELED">Yes</option>
                                     </select>
                                  </div>
                                  <div class="form-group col-xs-2 col-md-2">
                                     <select name="thrdbevltype_1" class="form-control col-xs-2 col-md-2 xCondThBv" id="thrdbevltype_1">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="TaperNPT">3/4" Taper/NPT</option>
                                        <option value="JStyleColumnThread">J Style/Column Thread</option>
                                        <option value="LayneCombo">Thread for Layne Combo</option>
                                        <option value="MachineBevel">Machine Bevel</option>
                                        <option value="MechanicalTorchBevel">Mechanical Torch Bevel</option>
                                     </select>
                                  </div>
                                  <div class="col-xs-1">                                        
                                     <p id="xremove-row" class="xremove-row btn-danger btn pull-left">DELETE</p>
                                  </div>                                
                               </div> <!-- id="rowfields" class="col-xs-16 col-md-16 -->                                 
                            </div> <!-- xmulti-field-0 -->
                         </div> <!-- xmulti-fields -->
                      </div> <!-- class="xmulti-field-wrapper" -->
                      <span>
                         <div class="btn-toolbar">
                            <p id="xadd-row" class="xadd-row btn-success btn pull-left">ADD LINE</p><br>  
                            <p id="clrquo" class = "btn-warning btn pull-right clrquo">CLEAR QUOTE</p>                                    
                         </div>
                      </span>
                      <div>
                         <div class="container">
                            <div class="row">
                               <div id="custinfo" class="col-xs-16 col-md-16">
                                  <div class="well">
                                     <fieldset class="contactInfo">
                                        <legend class="text-center header qformInfo">Contact Information</legend>
                                        <div class="row margin-top-20">
                                           <div class="form-group margin-top-20">
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                              <div class="col-md-4" id="submitterName">
                                                 <input id="fullName" name="qfullName" type="text" placeholder="Your Name" class="submName form-control ">
                                              </div>
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-university bigicon"></i></span>
                                              <div class="col-md-4 coName" id="companyName">
                                                 <input id="compName" name="qcompName" type="text"  placeholder="Company" class="submCompany form-control ">
                                              </div>
                                           </div>
                                        </div>
                                        <div class="row margin-top-20">                                                    
                                           <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                              <div class="col-md-4 submEmail" id="submittersEmail">
                                                 <input id="eMail" name="qEmail" type="email" placeholder="Email Address" class="submEmail form-control " data-error="Bruh, that email address is invalid">
                                              </div>
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                              <div class="col-md-4 submPhone"  id="submittersPhone">
                                                 <input id="phone" name="qPhone" type="text" placeholder="Phone" class="submPhone form-control ">
                                              </div>
                                           </div>
                                        </div> 
                                        <div class="row margin-top-20">                                                        
                                           <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-o bigicon"></i></span>
                                              <div class="col-md-4 submAddr1"  id="address1">
                                                 <input id="addr1" name="qAddr1" type="text" placeholder="Address 1" class="submAddr1 form-control ">
                                              </div>
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-o bigicon"></i></span>
                                              <div class="col-md-4 submAddr2"  id="address2">
                                                 <input id="addr2" name="qAddr2" type="text" placeholder="Address 2" class="submAddr2 form-control">                                                            
                                              </div>
                                           </div>    
                                        </div>
                                        <div class="row margin-top-20">                                                        
                                           <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-o bigicon"></i></span>
                                              <div class="col-md-4 submCity"  id="city">
                                                 <input id="city" name="qCity" type="text" placeholder="City" class="addrCity form-control ">
                                              </div>
                                              <!--<span class="col-md-2 col-md-offset-2 text-center"></span>-->
                                              <div class="col-md-2 submState "  id="state">
                                                 <input id="state" name="qState" type="text" placeholder="State" class="addrState form-control">                                                            
                                              </div>
                                              <!--<span class="col-md-1 col-md-offset-2 text-center"></i></span>-->
                                              <div class="col-md-2 submZip "  id="zip">
                                                 <input id="zip" name="qZip" type="text" placeholder="Zip" class="addrZip form-control">
                                              </div>
                                           </div>  
                                        </div>  
                                        <div class="row margin-top-30">  
                                           <div class="form-group">
                                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                              <div class="col-md-8" id="submittersComment">
                                                 <textarea class="submComment form-control" id="message" name="qMessage" placeholder="Enter comments or specific usage information here." rows="7"></textarea>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="form-group">
                                           <input type="hidden" id="hQuoteID" value="" name="hiddenQuoteID" class="hiddenField"/> 
                                        </div>
                                     </fieldset>
                                  </div>                                                    
                               </div>
                            </div>
                         </div>
                      </div>                    
                   </form>
                </div>  <!--row -->  
                <span>
                   <div class="btn-group center-block">
                      <p id="submit" type="submit" class="btn-success btn submit">SUBMIT QUOTE</p>                                    
                   </div>
                </span>                            
                <!--                    </form>-->
             </div><!-- container-fluid -->
          </div> <!--</div>   main -->


          <script>
              jQuery(document).ready(function () {

                  jQuery('#submit').prop('disabled', true);

                  jQuery("#qform").validate({
                      rules: {
                          qfullName: {
                              required: true,
                              minlength: 2
                          },
                          qcompName: {
                              required: true,
                              minlength: 2
                          },
                          qEmail: {
                              required: true,
                              email: true
                          },
                          qPhone: {
                              required: true
                          },
                          qAddr1: {
                              required: true,
                              minlength: 2
                          },
                          qCity: {
                              required: true,
                              minlength: 2
                          },
                          qState: {
                              required: true,
                              minlength: 2
                          },
                          qZip: {
                              required: true,
                              minlength: 5
                          }
                      },
                      messages: {
                          fullname: "Please enter your name",
                          compname: "Plese enter a company",
                          qphone: "Please enter a phone#",
                          qAddr1: "Req'd: Address",
                          qcity: "Req'd: City",
                          qstate: "Req'd: State",
                          qzipcode: "Req'd: Zip Code"
                      }
                  });

                  jQuery('#qform input').on('keyup blur', function () {
                      if (jQuery('#qform').valid()) {
                          jQuery('#submit').prop('disabled', false);
                      } else {
                          jQuery('#submit').prop('disabled', true);
                      }
                  });

                  current_id = 0;

                  if (typeof nextRow === 'undefined') {
                      getNextRow(jQuery('#rowfields'));
                  }
                  ;
                  function getNextRow(elementR) {
                      nextRow = elementR.clone(true);
                      jQuery(':input', '#qform.nextRow')
                              .not(':button, :submit, :reset, :hidden')
                              .val('')
                              .removeAttr('checked')
                              .removeAttr('selected');
                      jQuery('.xCondByPipe').prop('disabled', true);
                      jQuery('.xCondThBv').prop('disabled', true);
                  }
                  ;
                  jQuery(document).on("click", '#xadd-row', function () {
                      next_element(jQuery('rowfields'));
                  });
                  initializeRow(current_id);
                  //initialize first row
                  function initializeRow(current_id) {
                      if (current_id === 0) {
                          id = current_id + 1;
                          current_id = id;
                          jQuery("#lin_" + id).val(current_id);
                          jQuery('.xrowfields').attr("id", "rowfields" + "_" + id);
                          jQuery('.xremove-row').attr("id", "xremove-row" + "_" + id);
                          jQuery(':input', '.xrowfields').each(function () {
                              var field_id = jQuery(this).attr("id"),
                                      field_class = jQuery(this).attr("class");
                              field_name = jQuery(this).attr("name");
                              if (field_name === 'lin_') {
                                  jQuery(this).attr("value", id);
                              }
                              jQuery(this).attr("id", field_id.split("_")[0] + "_" + id);
                              jQuery(this).attr("name", field_name.split("_")[0] + "_" + id);
                              jQuery(this).attr("data-index", id);
                          });
                      }
                  }
                  ;
                  function next_element(element) {
                      var wrapCount = document.getElementById("xmulti-field-0").childElementCount;
                      var new_element = nextRow.clone(true),
                              id = wrapCount + 1;
                      current_id = id;
                      jQuery("#lin_" + id).val(current_id);
                      jQuery('.xrowfields', new_element).attr("id", "rowfields" + "_" + id);
                      jQuery('.xremove-row', new_element).attr("id", "xremove-row" + "_" + id);
                      jQuery(':input', new_element).each(function () {
                          var field_id = jQuery(this).attr("id"),
                                  field_name = jQuery(this).attr("name");
                          if (field_name === 'lin_') {
                              jQuery(this).attr("value", id);
                          }
                          field_value = jQuery(this).attr("name");
                          jQuery(this).attr("id", field_id.split("_")[0] + "_" + id);
                          jQuery(this).attr("name", field_name.split("_")[0] + "_" + id);
                          jQuery(this).attr("data-index", id);
                      });
                      jQuery(this).attr("value", "lin_" + id);
                      jQuery(this).closest('.rowfields').children('.xCondByPipe').prop('disabled', true);
                      jQuery(this).parent().siblings(".xCondByPipe").prop('disabled', true);
                      jQuery(this).parent().siblings(".xCondThBv").prop('disabled', true);
                      new_element.attr("id", "rowfields" + "_" + id);
                      new_element.appendTo(jQuery("#xmulti-field-0"));
                  }
                  /* The user has deleted line(s) from the quote, which effects sequencing of lines.
                   * Instead of fiddling with the DOM and changing all elements to reflect
                   * new numbering, all we're doing is updating the _value_ which should be 
                   * what the user sees on display.
                   */
                  function form_renumber(element) {
                      var wrapCount = document.getElementById(element).childElementCount;
                      var thisID = 0;
                      jQuery("#xmulti-field-0").children().each(function () {
                          thisID++;
                          var lnum = jQuery(this).attr("id");
                          var theLineNumber = lnum.split("_")[1];
                          jQuery("#lin_" + theLineNumber).val(thisID);
                      });
                      current_id = wrapCount;
                  }
                  ;
                  /*
                   * Change to select 'PIPE' unlocks THREAD, BEVEL and THREAD/BEVEL TYPE select field...
                   */
                  jQuery(document).on('change', ".xOnPrdCh", function () {
                      var lnum = jQuery(this).attr("id");
                      var theLineNumber = lnum.split("_")[1];
                      var lineSelected = '#prd_' + theLineNumber;
                      var prodSel = jQuery(lineSelected).val();
                      var cth = '#cthreaded' + "_" + theLineNumber;
                      var cbv = '#cbeveled' + "_" + theLineNumber;
                      var cthbv = '#thrdbevltype' + "_" + theLineNumber;
                      if (prodSel === "Pipe") {
                          jQuery(cth).prop('disabled', false);
                          jQuery(cbv).prop('disabled', false);
                      }
                      else {
                          jQuery(cth).prop('disabled', true);
                          jQuery(cbv).prop('disabled', true);
                          jQuery(cthbv).prop('disabled', true);
                      }
                  });
                  /*
                   * Change to THREAD or BEVEL conditions the THREAD/BEVEL select field...
                   */
                  jQuery(document).on('change', ".condThread", function () {
                      var theID = jQuery(this).attr("id");
                      var theLineNumber = theID.split("_")[1];
                      var lineSelected = '#cthreaded_' + theLineNumber;
                      var cthbv = '#thrdbevltype' + "_" + theLineNumber;
                      var threadSel = jQuery(lineSelected).val();
                      var bv = '#cbeveled_' + theLineNumber;
                      var theBevel = jQuery(bv).val();
                      if (threadSel === "THREADED") {
                          jQuery(cthbv).prop('disabled', false);
                      }
                      if (threadSel === "NOT THREADED" && theBevel === "BEVELED") {
                          jQuery(cthbv).prop('disabled', false);
                      }
                      if (threadSel === "NOT THREADED" && theBevel === "NOT BEVELED") {
                          jQuery(cthbv).prop('disabled', true);
                      }
                  });
                  /*
                   * Change to THREAD or BEVEL conditions the THREAD/BEVEL select field...
                   */
                  jQuery(document).on('change', ".condBevel", function () {
                      var theID = jQuery(this).attr("id");
                      var theLineNumber = theID.split("_")[1];
                      var lineSelected = '#cbeveled_' + theLineNumber;
                      var cthbv = '#thrdbevltype' + "_" + theLineNumber;
                      var bevelSel = jQuery(lineSelected).val();
                      var th = '#cthreaded_' + theLineNumber;
                      var theThread = jQuery(th).val();
                      if (bevelSel === "BEVELED") {
                          jQuery(cthbv).prop('disabled', false);
                      }
                      if (bevelSel === "NOT BEVELED" && theThread === "THREADED") {
                          jQuery(cthbv).prop('disabled', false);
                      }
                      if (bevelSel === "NOT BEVELED" && theThread === "NOT THREADED") {
                          jQuery(cthbv).prop('disabled', true);
                      }
                  });
                  /*
                   * Remove a row ...
                   */
                  jQuery(document).on("click", ".xremove-row", function () {
                      var wrapCount = document.getElementById("xmulti-field-0").childElementCount;
                      var field_id = jQuery(this).attr("id");
                      var fld2 = jQuery(this).parent().parent().parent().attr("id");
                      var theLineNumber = field_id.split("_")[1];
                      if (wrapCount > 1) {
                          jQuery("#rowfields_" + theLineNumber).remove();
                      }
                      var wrapCount = document.getElementById("xmulti-field-0").childElementCount;
                      var xr = jQuery(this).parent().parent().parent();
                      form_renumber(fld2);
                  });
                  /*
                   * Clear the quote...
                   */
                  jQuery(document).on("click", ".clrquo", function () {
                      jQuery("#xmulti-field-0").empty();
                      next_element(jQuery('rowfields'));
                      jQuery('#submit').prop('disabled', false);
                  });

                  /*
                   * SUBMIT the quote - quoteID is substring COMPANYNAME + datetimestamp
                   */
                  jQuery(document).on("click", ".submit", function () {
                      var thisID = 0; //this will hold the actual line number
                      var d = new Date();
                      var iDt = d.toISOString().split(".")[0];
                      var parsedDt = iDt.replace(/[^0-9\.]+/g, "");
                      var cx = jQuery('#compName').val().toUpperCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_.\s]/g, '');
                      var cName = cx.substring(0, (cx.length > 5 ? 5 : cx.length));
                      var quoteID = cName + "_" + parsedDt;
                      var xC = document.getElementById("xmulti-field-0").childElementCount;
                      jQuery("#hQLineCount").attr("value", xC);
                      jQuery("#hQuoteID").attr("value", quoteID);
                      jQuery("#xmulti-field-0").children().each(function () {
                          thisID++;
                          var lx = jQuery(this).attr("id");
                          var theLineNumber = lx.split("_")[1];
                          jQuery("#actualLineNumber_" + theLineNumber).val(thisID);
                      });
                      var qData = jQuery('#qform').serialize();
                      jQuery.ajax({
                          type: 'POST',
                          url: '../form1.php',
                          data: qData,
                          success: function (response) {
                              console.log(response);
                              jQuery('.msgToUser').html('<a href="http://mycompany.com">✓ SUBMITTED! Click HERE to return to the home page.</a>');
                          }});
                      //Disable the submit button
                      jQuery('#submit').prop('disabled', true);
                      return false;
                  });
              });
          </script>              
       </body>
    </html>   
    <?php get_footer(); ?>
<?php } ?>