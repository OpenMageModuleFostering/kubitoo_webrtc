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
                        <svg width="37px" height="51px" viewBox="0 0 37 51" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="4" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.563004889   0 0 0 0 0.563004889   0 0 0 0 0.563004889  0 0 0 0.5 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Desktop" stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g id="Desktop-Try-and-Buy-4" transform="translate(-724.000000, -517.000000)">
                                    <g id="Group-5" filter="url(#filter-1)" transform="translate(710.000000, 505.000000)">
                                        <path d="M40.302,18 L24.698,18 C23.398,18 22.334,19.063 22.334,20.364 L22.334,50.635 C22.334,51.936 23.398,53 24.698,53 L40.302,53 C41.602,53 42.666,51.938 42.666,50.636 L42.666,20.364 C42.666,19.063 41.602,18 40.302,18 L40.302,18 Z M30.004,19.704 L34.996,19.704 C35.154,19.704 35.282,19.832 35.282,19.991 C35.282,20.149 35.154,20.277 34.996,20.277 L30.004,20.277 C29.846,20.277 29.718,20.149 29.718,19.991 C29.718,19.832 29.846,19.704 30.004,19.704 L30.004,19.704 Z M32.5,51.818 C31.847,51.818 31.318,51.289 31.318,50.635 C31.318,49.981 31.847,49.453 32.5,49.453 C33.153,49.453 33.682,49.981 33.682,50.635 C33.682,51.289 33.153,51.818 32.5,51.818 L32.5,51.818 Z M41.021,48.625 L23.979,48.625 L23.979,21.749 L41.021,21.749 L41.021,48.625 L41.021,48.625 Z" id="Shape"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Call now</span>
                    </span>
                </div>
                <div id="proposta2" data-value="Contact us">
                    <input type="radio" name="buttonhtml" value="2"/>
                    <span>
                        <svg width="53px" height="51px" viewBox="0 0 53 51" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="4" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.563004889   0 0 0 0 0.563004889   0 0 0 0 0.563004889  0 0 0 0.5 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Desktop" stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g id="Desktop-Try-and-Buy-4" transform="translate(-721.000000, -629.000000)">
                                    <g id="Group-5-Copy" filter="url(#filter-1)" transform="translate(710.000000, 619.000000)">
                                        <path d="M52.9274793,28.1389189 L51.5925587,28.1389189 C51.2273901,28.1389189 51.2151939,27.9008959 51.2025877,27.7824455 C50.5025872,21.2169679 44.9061698,16.0848319 38.1282582,16.0848319 L36.8717418,16.0848319 C30.1439473,16.0848319 24.5803265,21.1411637 23.8137081,27.6369586 C23.7941326,27.8033605 23.7838837,28.1389189 23.4764164,28.1389189 L22.0724182,28.1389189 C21.1509387,28.1389189 19,29.1041723 19,33.9787986 L19,36.5370617 C19,40.1524002 21.1509387,40.9862461 22.0724182,40.9862461 L26.5393032,40.9862461 C27.4607827,40.9862461 28.2146925,40.2357542 28.2146925,39.3184523 L28.2146925,29.8067126 C28.2146925,28.8894108 27.4607827,28.1389189 26.5393032,28.1389189 C26.5393032,28.1389189 26.3289956,28.1205545 26.3825974,27.7476551 C27.119699,22.6138867 31.5202735,18.6355452 36.8717418,18.6355452 L38.1282582,18.6355452 C43.4433429,18.6355452 47.8557037,22.5551206 48.6026442,27.6430801 C48.6267292,27.8071354 48.7165096,28.1389189 48.4606968,28.1389189 C47.5392173,28.1389189 46.7853075,28.8894108 46.7853075,29.8067126 L46.7853075,39.3184523 C46.7853075,40.2357542 47.5392173,40.9862461 48.4606968,40.9862461 L49.2994676,40.9862461 C49.5300681,40.9862461 49.4909172,41.169686 49.4703169,41.2621202 C48.7870221,44.3334643 47.2527603,47.8178034 43.809024,47.8178034 L41.2581728,47.8178034 C40.9978505,47.8178034 40.9335898,47.6279359 40.8840876,47.5379503 C40.4708515,46.7863362 39.6694893,46.27652 38.7481123,46.27652 L36.3977297,46.27652 C35.0532777,46.27652 33.9633061,47.361448 33.9633061,48.6999068 C33.9633061,50.0383656 35.0532777,51.1231916 36.3977297,51.1231916 L38.7481123,51.1231916 C39.6819929,51.1231916 40.4927842,50.5996021 40.9008958,49.831358 C40.936562,49.7642259 40.9657714,49.6246564 41.2412621,49.6246564 L43.809024,49.6246564 C46.1481328,49.6246564 49.2783549,48.4675971 50.9073166,42.9550119 C51.0809331,42.3675551 51.2217532,41.7821388 51.3364385,41.2179436 C51.3522218,41.140303 51.3620608,40.9863481 51.6054724,40.9863481 L52.9275818,40.9863481 C53.8490613,40.9863481 56,40.1524002 56,36.5371637 L56,33.9789006 C55.9998975,29.1736509 53.8489588,28.1389189 52.9274793,28.1389189 L52.9274793,28.1389189 Z" id="Shape"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Contact us</span>
                    </span>
                </div>
                <div id="proposta3" data-value="Receive information">
                    <input type="radio" name="buttonhtml" value="3"/>
                    <span>
                        <svg width="46px" height="46px" viewBox="0 0 46 46" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-1">
                                    <feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                                    <feGaussianBlur stdDeviation="4" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                                    <feColorMatrix values="0 0 0 0 0.563004889   0 0 0 0 0.563004889   0 0 0 0 0.563004889  0 0 0 0.5 0" type="matrix" in="shadowBlurOuter1" result="shadowMatrixOuter1"></feColorMatrix>
                                    <feMerge>
                                        <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                            </defs>
                            <g id="Desktop" stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g id="Desktop-Try-and-Buy-4" transform="translate(-725.000000, -750.000000)">
                                    <g id="Group-5-Copy-2" filter="url(#filter-1)" transform="translate(709.000000, 733.000000)">
                                        <path d="M50.3169403,23 L27.7215672,23 C25.6980597,23 24.051791,24.6340741 24.051791,26.6426667 L24.051791,41.355037 C24.051791,43.3635556 25.6980597,44.9977037 27.7216418,44.9977037 L40.0958209,44.9977037 L40.0958209,52.0752593 C40.0958209,52.4463704 40.3281343,52.7783704 40.6784328,52.9081481 C40.7805224,52.9459259 40.8863433,52.9641481 40.9911194,52.9641481 C41.2459701,52.9641481 41.4947015,52.8560741 41.668209,52.6572593 L48.3529104,44.9977037 L50.3168657,44.9977037 C52.3403731,44.9977037 53.9866418,43.3636296 53.9866418,41.355037 L53.9866418,26.6426667 C53.9867164,24.6340741 52.3404478,23 50.3169403,23 Z M49.046791,28.8631111 L28.991791,28.8631111 C28.4972388,28.8631111 28.0962687,29.2611111 28.0962687,29.752 C28.0962687,30.2428889 28.4972388,30.6408889 28.991791,30.6408889 L49.046791,30.6408889 C49.5413433,30.6408889 49.9423134,30.2428889 49.9423134,29.752 C49.9423134,29.2611111 49.5414179,28.8631111 49.046791,28.8631111 Z M49.046791,33.1099259 L28.991791,33.1099259 C28.4972388,33.1099259 28.0962687,33.5079259 28.0962687,33.9988148 C28.0962687,34.4897037 28.4972388,34.8877037 28.991791,34.8877037 L49.046791,34.8877037 C49.5413433,34.8877037 49.9423134,34.4897037 49.9423134,33.9988148 C49.9423134,33.5079259 49.5414179,33.1099259 49.046791,33.1099259 Z M38.4844776,37.3565926 L28.991791,37.3565926 C28.4972388,37.3565926 28.0962687,37.7545926 28.0962687,38.2454815 C28.0962687,38.7363704 28.4972388,39.1343704 28.991791,39.1343704 L38.4845522,39.1343704 C38.9791045,39.1343704 39.3800746,38.7363704 39.3800746,38.2454815 C39.38,37.7546667 38.9791045,37.3565926 38.4844776,37.3565926 Z" id="Combined-Shape"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Receive <br/>information</span>
                    </span>
                </div>
            </div>';
        $html .= "<script src=\"https://code.jquery.com/jquery-1.12.2.min.js\" crossorigin=\"anonymous\"></script>
                  <script>
                    var svg = [];
                    svg['proposta1'] = \"<svg width='37px' height='51px' viewBox='0 0 37 51' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><defs><filter x='-50%' y='-50%' width='200%' height='200%' filterUnits='objectBoundingBox' id='filter-1'><feOffset dx='0' dy='2' in='SourceAlpha' result='shadowOffsetOuter1'></feOffset><feGaussianBlur stdDeviation='4' in='shadowOffsetOuter1' result='shadowBlurOuter1'></feGaussianBlur><feColorMatrix values='0 0 0 0 0.563004889 0 0 0 0 0.563004889  0 0 0 0 0.563004889 0 0 0 0.5 0' type='matrix' in='shadowBlurOuter1' result='shadowMatrixOuter1'></feColorMatrix><feMerge><feMergeNode in='shadowMatrixOuter1'></feMergeNode><feMergeNode in='SourceGraphic'></feMergeNode></feMerge></filter></defs><g id='Desktop' stroke='none' stroke-width='1' fill-rule='evenodd'><g id='Desktop-Try-and-Buy-4' transform='translate(-724.000000, -517.000000)'><g id='Group-5' filter='url(#filter-1)' transform='translate(710.000000, 505.000000)'><path d='M40.302,18 L24.698,18 C23.398,18 22.334,19.063 22.334,20.364 L22.334,50.635 C22.334,51.936 23.398,53 24.698,53 L40.302,53 C41.602,53 42.666,51.938 42.666,50.636 L42.666,20.364 C42.666,19.063 41.602,18 40.302,18 L40.302,18 Z M30.004,19.704 L34.996,19.704 C35.154,19.704 35.282,19.832 35.282,19.991 C35.282,20.149 35.154,20.277 34.996,20.277 L30.004,20.277 C29.846,20.277 29.718,20.149 29.718,19.991 C29.718,19.832 29.846,19.704 30.004,19.704 L30.004,19.704 Z M32.5,51.818 C31.847,51.818 31.318,51.289 31.318,50.635 C31.318,49.981 31.847,49.453 32.5,49.453 C33.153,49.453 33.682,49.981 33.682,50.635 C33.682,51.289 33.153,51.818 32.5,51.818 L32.5,51.818 Z M41.021,48.625 L23.979,48.625 L23.979,21.749 L41.021,21.749 L41.021,48.625 L41.021,48.625 Z' id='Shape'></path></g></g></g></svg>\";
                    svg['proposta2'] = \"<svg width='53px' height='51px' viewBox='0 0 53 51' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><defs><filter x='-50%' y='-50%' width='200%' height='200%' filterUnits='objectBoundingBox' id='filter-1'><feOffset dx='0' dy='2' in='SourceAlpha' result='shadowOffsetOuter1'></feOffset><feGaussianBlur stdDeviation='4' in='shadowOffsetOuter1' result='shadowBlurOuter1'></feGaussianBlur><feColorMatrix values='0 0 0 0 0.563004889   0 0 0 0 0.563004889   0 0 0 0 0.563004889  0 0 0 0.5 0' type='matrix' in='shadowBlurOuter1' result='shadowMatrixOuter1'></feColorMatrix><feMerge><feMergeNode in='shadowMatrixOuter1'></feMergeNode><feMergeNode in='SourceGraphic'></feMergeNode></feMerge></filter></defs><g id='Desktop' stroke='none' stroke-width='1' fill-rule='evenodd'><g id='Desktop-Try-and-Buy-4' transform='translate(-721.000000, -629.000000)'><g id='Group-5-Copy' filter='url(#filter-1)' transform='translate(710.000000, 619.000000)'><path d='M52.9274793,28.1389189 L51.5925587,28.1389189 C51.2273901,28.1389189 51.2151939,27.9008959 51.2025877,27.7824455 C50.5025872,21.2169679 44.9061698,16.0848319 38.1282582,16.0848319 L36.8717418,16.0848319 C30.1439473,16.0848319 24.5803265,21.1411637 23.8137081,27.6369586 C23.7941326,27.8033605 23.7838837,28.1389189 23.4764164,28.1389189 L22.0724182,28.1389189 C21.1509387,28.1389189 19,29.1041723 19,33.9787986 L19,36.5370617 C19,40.1524002 21.1509387,40.9862461 22.0724182,40.9862461 L26.5393032,40.9862461 C27.4607827,40.9862461 28.2146925,40.2357542 28.2146925,39.3184523 L28.2146925,29.8067126 C28.2146925,28.8894108 27.4607827,28.1389189 26.5393032,28.1389189 C26.5393032,28.1389189 26.3289956,28.1205545 26.3825974,27.7476551 C27.119699,22.6138867 31.5202735,18.6355452 36.8717418,18.6355452 L38.1282582,18.6355452 C43.4433429,18.6355452 47.8557037,22.5551206 48.6026442,27.6430801 C48.6267292,27.8071354 48.7165096,28.1389189 48.4606968,28.1389189 C47.5392173,28.1389189 46.7853075,28.8894108 46.7853075,29.8067126 L46.7853075,39.3184523 C46.7853075,40.2357542 47.5392173,40.9862461 48.4606968,40.9862461 L49.2994676,40.9862461 C49.5300681,40.9862461 49.4909172,41.169686 49.4703169,41.2621202 C48.7870221,44.3334643 47.2527603,47.8178034 43.809024,47.8178034 L41.2581728,47.8178034 C40.9978505,47.8178034 40.9335898,47.6279359 40.8840876,47.5379503 C40.4708515,46.7863362 39.6694893,46.27652 38.7481123,46.27652 L36.3977297,46.27652 C35.0532777,46.27652 33.9633061,47.361448 33.9633061,48.6999068 C33.9633061,50.0383656 35.0532777,51.1231916 36.3977297,51.1231916 L38.7481123,51.1231916 C39.6819929,51.1231916 40.4927842,50.5996021 40.9008958,49.831358 C40.936562,49.7642259 40.9657714,49.6246564 41.2412621,49.6246564 L43.809024,49.6246564 C46.1481328,49.6246564 49.2783549,48.4675971 50.9073166,42.9550119 C51.0809331,42.3675551 51.2217532,41.7821388 51.3364385,41.2179436 C51.3522218,41.140303 51.3620608,40.9863481 51.6054724,40.9863481 L52.9275818,40.9863481 C53.8490613,40.9863481 56,40.1524002 56,36.5371637 L56,33.9789006 C55.9998975,29.1736509 53.8489588,28.1389189 52.9274793,28.1389189 L52.9274793,28.1389189 Z' id='Shape'></path></g></g></g></svg>\";
                    svg['proposta3'] = \"<svg width='46px' height='46px' viewBox='0 0 46 46' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><defs><filter x='-50%' y='-50%' width='200%' height='200%' filterUnits='objectBoundingBox' id='filter-1'><feOffset dx='0' dy='2' in='SourceAlpha' result='shadowOffsetOuter1'></feOffset><feGaussianBlur stdDeviation='4' in='shadowOffsetOuter1' result='shadowBlurOuter1'></feGaussianBlur><feColorMatrix values='0 0 0 0 0.563004889   0 0 0 0 0.563004889   0 0 0 0 0.563004889  0 0 0 0.5 0' type='matrix' in='shadowBlurOuter1' result='shadowMatrixOuter1'></feColorMatrix><feMerge><feMergeNode in='shadowMatrixOuter1'></feMergeNode><feMergeNode in='SourceGraphic'></feMergeNode></feMerge></filter></defs><g id='Desktop' stroke='none' stroke-width='1' fill-rule='evenodd'><g id='Desktop-Try-and-Buy-4' transform='translate(-725.000000, -750.000000)'><g id='Group-5-Copy-2' filter='url(#filter-1)' transform='translate(709.000000, 733.000000)'><path d='M50.3169403,23 L27.7215672,23 C25.6980597,23 24.051791,24.6340741 24.051791,26.6426667 L24.051791,41.355037 C24.051791,43.3635556 25.6980597,44.9977037 27.7216418,44.9977037 L40.0958209,44.9977037 L40.0958209,52.0752593 C40.0958209,52.4463704 40.3281343,52.7783704 40.6784328,52.9081481 C40.7805224,52.9459259 40.8863433,52.9641481 40.9911194,52.9641481 C41.2459701,52.9641481 41.4947015,52.8560741 41.668209,52.6572593 L48.3529104,44.9977037 L50.3168657,44.9977037 C52.3403731,44.9977037 53.9866418,43.3636296 53.9866418,41.355037 L53.9866418,26.6426667 C53.9867164,24.6340741 52.3404478,23 50.3169403,23 Z M49.046791,28.8631111 L28.991791,28.8631111 C28.4972388,28.8631111 28.0962687,29.2611111 28.0962687,29.752 C28.0962687,30.2428889 28.4972388,30.6408889 28.991791,30.6408889 L49.046791,30.6408889 C49.5413433,30.6408889 49.9423134,30.2428889 49.9423134,29.752 C49.9423134,29.2611111 49.5414179,28.8631111 49.046791,28.8631111 Z M49.046791,33.1099259 L28.991791,33.1099259 C28.4972388,33.1099259 28.0962687,33.5079259 28.0962687,33.9988148 C28.0962687,34.4897037 28.4972388,34.8877037 28.991791,34.8877037 L49.046791,34.8877037 C49.5413433,34.8877037 49.9423134,34.4897037 49.9423134,33.9988148 C49.9423134,33.5079259 49.5414179,33.1099259 49.046791,33.1099259 Z M38.4844776,37.3565926 L28.991791,37.3565926 C28.4972388,37.3565926 28.0962687,37.7545926 28.0962687,38.2454815 C28.0962687,38.7363704 28.4972388,39.1343704 28.991791,39.1343704 L38.4845522,39.1343704 C38.9791045,39.1343704 39.3800746,38.7363704 39.3800746,38.2454815 C39.38,37.7546667 38.9791045,37.3565926 38.4844776,37.3565926 Z' id='Combined-Shape'></path></g></g></g></svg>\";

                    var css = [];
                    css['proposta1'] = \"<style type='text/css'>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700);.btn_kubitoo{display:inline-block;background:#659fd5;border-radius:4px;box-shadow:0 0 1px 1px rgba(0,0,0,0.2);overflow:hidden;padding:7px 15px 7px 0;width:auto; max-width:280px}.btn_kubitoo > svg{float:left;display:inline-block;margin:0;padding:0;margin-left:20px;fill:#fff}.btn_kubitoo > span{float:left;display:inline-block;margin:0;padding:0;line-height:50px;font-family:'Open Sans',sans-serif;font-size:18px;font-weight:700;color:#fff;padding-left:5px;padding-right:5px;text-transform:uppercase;text-decoration:none;height:50px;overflow:hidden;max-width:75%}</style>\";
                    css['proposta2'] = \"<style type='text/css'>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700);.btn_kubitoo{display:inline-block;background:#659fd5;border-radius:4px;box-shadow:0 0 1px 1px rgba(0,0,0,0.2);overflow:hidden;padding:7px 15px 7px 0;width:auto;max-width:280px}.btn_kubitoo > svg{float:left;display:inline-block;margin:0;padding:0;margin-left:20px;fill:#fff}.btn_kubitoo > span{float:left;display:inline-block;margin:0;padding:0;line-height:50px;font-family:'Open Sans',sans-serif;font-size:18px;font-weight:700;color:#fff;padding-left:5px;padding-right:5px;text-transform:uppercase;text-decoration:none;height:50px;overflow:hidden;max-width:75%}</style>\";
                    css['proposta3'] = \"<style type='text/css'>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700);.btn_kubitoo{display:inline-block;background:#659fd5;border-radius:4px;box-shadow:0 0 1px 1px rgba(0,0,0,0.2);overflow:hidden;padding:7px 15px 7px 0;width:auto;max-width:280px}.btn_kubitoo > svg{float:left;display:inline-block;margin:0;padding:0;margin-left:20px;fill:#fff}.btn_kubitoo > span{float:left;display:inline-block;margin:0;padding:0;line-height:23px;font-family:'Open Sans',sans-serif;font-size:18px;font-weight:700;color:#fff;padding-left:5px;padding-right:5px;text-transform:uppercase;text-decoration:none;height:50px;overflow:hidden;max-width:75%}</style>\";

                        $.noConflict();
    
                        jQuery(document).ready(function(){
                        
                            if(jQuery('#idbutton').val() > 0)
                            {   
                                jQuery('#proposta'+jQuery('#idbutton').val()).find('input').attr('checked','checked');
                                jQuery('#". $this->getHtmlId() . " input[type=radio]:checked').parent().find('span > span').html(jQuery('#textbutton').val());
                            }
                            else
                            {   jQuery('#idbutton').val('1');
                                jQuery('#imgbutton').val(svg['proposta1']);
                            }

                            jQuery('#". $this->getHtmlId() . " input[type=radio]').change(function(){
                                if(jQuery(this).is(':checked'))
                                {   jQuery('#idbutton').val(jQuery(this).val());
                                    jQuery('#imgbutton').val(svg[jQuery(this).parent().attr('id')]);
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
                        line-height:1;
                    }
                    div#" . $this->getHtmlId() ." div
                    {   display: inline-block;
                        float: left;
                        margin-bottom:5px;
                        padding: 0;
                        width: 100%;
                    }
                    div#" . $this->getHtmlId() ." div > input
                    {   float:left;
                        display:inline-block;
                        margin:0;
                        padding:0;
                        margin-top:28px;
                    }
                    div#" . $this->getHtmlId() ." div > span
                    {   float: left;
                        display: inline-block;
                        margin:0;
                        padding:0;
                        width:auto;
                        margin-left:5%;
                        border-radius: 4.3px;
                        background-color: #659fd5;
                        box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.2);
                        padding-top:7px;
                        padding-bottom:7px;
                        padding-right:15px;
                        max-width:80%;
                        overflow: hidden;
                    }
                    div#" . $this->getHtmlId() ." div > span > svg
                    {   float: none;
                        display: inline-block;
                        margin:0;
                        padding:0;
                        margin-left:20px;
                        fill:#ffffff;
                    }
                    div#" . $this->getHtmlId() ." div > span > span
                    {   float:none;
                        display: inline-block;
                        margin:0;
                        padding:0;
                        line-height: 50px;
                        font-family: 'Open Sans', sans-serif;
                        font-size: 18px;
                        font-weight: bold;
                        color: #ffffff;
                        padding-left:5px;
                        padding-right:5px;
                        text-transform: uppercase;
                        text-decoration: none;
                        height:50px;
                        overflow: hidden;
                    }
                    div#" . $this->getHtmlId() ." div#proposta1 > span > span
                    {   max-width:78%; 
                    }
                    div#" . $this->getHtmlId() ." div#proposta2 > span > span
                    {   max-width:75%;
                    }
                    div#" . $this->getHtmlId() ." div#proposta3 > span > span
                    {   line-height: 23px;
                        max-width:78%;
                    }
                </style>";
        $html .= $this->getAfterElementHtml();
        return $html;
    }
}
