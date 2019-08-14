<?php

class Kubitoo_Webrtc_Block_Adminhtml_Configuration_Edit_Field_Custom extends Varien_Data_Form_Element_Abstract
{
    public function __construct($attributes=array())
    {
        parent::__construct($attributes);
    }

    public function getElementHtml()
    {
        $value = $this->getValue();

        $html = '<div id="' . $this->getHtmlId() . '">
                <div id="proposta1" data-value="Call now">
                    <input type="radio" name="buttonhtml" value="1" checked="checked"/>
                    <span>
                        <span>Call now</span>
                    </span>
                </div>
                <div id="proposta2" data-value="Contact us">
                    <input type="radio" name="buttonhtml" value="2"/>
                    <span>
                        <span>Contact us</span>
                    </span>
                </div>
                <div id="proposta3" data-value="Receive information">
                    <input type="radio" name="buttonhtml" value="3"/>
                    <span>
                        <span>Receive information</span>
                    </span>
                </div>
            </div>';
        $html .= "<script src=\"https://code.jquery.com/jquery-1.12.2.min.js\" crossorigin=\"anonymous\"></script>
                  <script>
                    var css = [];
                    css['proposta1'] = \"<style type='text/css'>@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);.btn_kubitoo{display:inline-block;width:150px;height:50px;position:relative;border:1px solid #346494;border-radius:4px;background:url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone1.png').") 10px 5px no-repeat #fff}.btn_kubitoo:hover{background:url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone1_sel.png').") 10px 5px no-repeat #346494}.btn_kubitoo>span{position:absolute;top:18px;left:38px;width:110px;font-size:14px;line-height:14px;height:15px;text-transform:uppercase;font-weight:700;color:#346494;font-family:'Open Sans Condensed',sans-serif;overflow:hidden;text-align:center;}.btn_kubitoo:hover>span{color:#fff}</style>\";
                    css['proposta2'] = \"<style type='text/css'>@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);.btn_kubitoo{display:inline-block;width:150px;height:50px;position:relative;border:1px solid #346494;border-radius:4px;background:#fff url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone2.png').") 15px 6px no-repeat;}.btn_kubitoo:hover{background:#346494 url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone2_sel.png').") 15px 6px no-repeat;}.btn_kubitoo>span{position:absolute;bottom:15px;left:40px;width:100px;font-size:14px;line-height:14px;height:15px;text-transform:uppercase;color:#346494;font-weight:bold;font-family:'Open Sans Condensed',sans-serif;overflow:hidden;text-align:center;}.btn_kubitoo:hover>span{color:#fff}</style>\";
                    css['proposta3'] = \"<style type='text/css'>@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);.btn_kubitoo{display:inline-block;width:150px;height:50px;position:relative;border:1px solid #346494;border-radius:4px;background:#fff url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone3.png').") 8px 9px no-repeat}.btn_kubitoo:hover{background:#346494 url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone3_sel.png').") 8px 9px no-repeat; }.btn_kubitoo>span{position:absolute;top:10px;left:46px;width:95px;font-size:14px;line-height:14px;height:30px;text-transform:uppercase;color:#346494;font-weight:700;font-family:'Open Sans Condensed',sans-serif;overflow:hidden;text-align:center;}.btn_kubitoo:hover>span{color:#fff}</style>\";

                        $.noConflict();
    
                        jQuery(document).ready(function(){
                        
                            if(jQuery('#idbutton').val() > 0)
                            {   
                                jQuery('#proposta'+jQuery('#idbutton').val()).find('input').attr('checked','checked');
                                jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().find('span > span').html(jQuery('#textbutton').val());
                            }
                            else
                            {   jQuery('#idbutton').val('1');
                                jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().find('span > span').html(jQuery('#textbutton').val());
                            }

                            jQuery('#". $this->getHtmlId() . " input[type=radio]').change(function(){
                                if(jQuery(this).is(':checked'))
                                {   jQuery('#idbutton').val(jQuery(this).val());
                                    if(jQuery('#textbutton').val() != \"\")
                                    {   
                                        jQuery(this).parent().find('span > span').html(jQuery('#textbutton').val());

                                        jQuery('#htmlbutton').val(css[jQuery(this).parent().attr('id')]);
                                    }
                                    else
                                    {   jQuery('#htmlbutton').val(css[jQuery(this).parent().attr('id')]);
                                    }
                                }   
                            });

                            jQuery('#textbutton').keyup(function(){
                                if(jQuery(this).val() != \"\")
                                {
                                    jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().find('span > span').html(jQuery(this).val());

                                    jQuery('#htmlbutton').val(css[jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().attr('id')]);
                                }
                                else
                                {   jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().find('span > span').html(jQuery('#buttonhtml input[type=radio]:checked').parent().attr(\"data-value\"));

                                    jQuery('#htmlbutton').val(css[jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().attr('id')]);
                                }
                                
                            });

                        });
                    </script>";
        $html .= "<style type=\"text/css\">
                    @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);
                    div#" . $this->getHtmlId() ."
                    {   display:inline-block;
                        width: 100%;
                    }
                    div#" . $this->getHtmlId() ." div
                    {   display: inline-block;
                        float: left;
                        margin-bottom:5px;
                        padding: 0;
                        width: 95%;
                    }
                    div#" . $this->getHtmlId() ." div > input
                    {   float:left;
                        display:inline-block;
                        margin:0;
                        padding:0;
                        margin-top:20px;
                    }
                    div#" . $this->getHtmlId() ." div > span
                    {   float:left;
                        display:inline-block;
                        margin:0;
                        padding:0;
                        margin-left:10px;
                        width:110px;
                        width:150px;
                        height:42px;
                        height:50px;
                        position:relative;
                        cursor:pointer;
                        border:1px solid #346494;
                        border-radius:4px;
                        -webkit-transition: all 0.3s ease-in-out;
                        -moz-transition: all 0.3s ease-in-out;
                        -o-transition: all 0.3s ease-in-out;
                        -ms-transition: all 0.3s ease-in-out;    
                        transition: all 0.3s ease-in-out;
                    }
                    div#" . $this->getHtmlId() ." div#proposta1 > span
                    {   background:#ffffff url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone1.png').") 10px 5px no-repeat;
                    }
                    div#" . $this->getHtmlId() ." div#proposta1 > span:hover
                    {   background:#346494 url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone1_sel.png').") 10px 5px no-repeat;
                    }
                    div#" . $this->getHtmlId() ." div#proposta1 > span > span
                    {   position:absolute;
                        top:18px;
                        left:40px;
                        width:100px;
                        font-size:14px;
                        line-height:14px;
                        height:15px;
                        text-transform:uppercase;
                        font-weight:bold;
                        color:#346494;
                        font-family: 'Open Sans Condensed', sans-serif;
                        overflow:hidden;
                        text-align:center;
                    }
                    div#" . $this->getHtmlId() ." div#proposta1 > span:hover > span
                    {   color:#ffffff;  
                    }
                    div#" . $this->getHtmlId() ." div#proposta2 > span
                    {   background:#ffffff url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone2.png').") 15px 6px no-repeat;
                    }
                    div#" . $this->getHtmlId() ." div#proposta2 > span:hover
                    {   background:#346494 url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone2_sel.png').") 15px 6px no-repeat;
                    }
                    div#" . $this->getHtmlId() ." div#proposta2 > span > span
                    {   position:absolute;
                        bottom:7px;
                        left:35px;
                        width:100px;
                        font-size:14px;
                        line-height:14px;
                        height:15px;
                        text-transform:uppercase;
                        color:#346494;
                        font-weight:bold;
                        font-family: 'Open Sans Condensed', sans-serif;
                        overflow:hidden;
                        text-align:center;
                        bottom:15px;
                        left:40px;
                    }
                    div#" . $this->getHtmlId() ." div#proposta2 > span:hover > span
                    {   color:#ffffff;  
                    }
                    div#" . $this->getHtmlId() ." div#proposta3 > span
                    {   background:#ffffff url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone3.png').") 8px 9px no-repeat;
                    }
                    div#" . $this->getHtmlId() ." div#proposta3 > span:hover
                    {   background:#346494 url(".Mage::getDesign()->getSkinUrl('images/kubitoo/sf_bottone3_sel.png').") 8px 9px no-repeat;
                    }
                    div#" . $this->getHtmlId() ." div#proposta3 > span > span
                    {   position:absolute;
                        top:10px;
                        left:46px;
                        width:95px;
                        font-size:14px;
                        line-height:14px;
                        height:30px;
                        text-transform:uppercase;
                        color:#346494;
                        font-weight:bold;
                        font-family: 'Open Sans Condensed', sans-serif;
                        overflow:hidden;
                        text-align:center;
                    }
                    div#" . $this->getHtmlId() ." div#proposta3 > span:hover > span
                    {   color:#ffffff;  
                    }
                </style>";
        $html .= $this->getAfterElementHtml();
        return $html;
    }
}
