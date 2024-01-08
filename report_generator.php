<?php include('report_generation_logic.php') ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site Inspection Report Generator</title>
        <link rel="stylesheet" href="report_generator1.css">
    </head>
    <body>
        <h2>SITE REPORT</h2>

        <div class="site_info">
            <div class="site_info_child">
                <div class="site_info_child_title">
                    <p>DATE</p>
                </div>
                <div class="site_info_child_input">
                    <input type="text">
                </div>
            </div>
            <div class="site_info_child">
                <div class="site_info_child_title">
                    <p>COMPILED BY</p>
                </div>
                <div class="site_info_child_input">
                    <input type="text">
                </div>
            </div>
            <div class="site_info_child">
                <div class="site_info_child_title">
                    <p>PROJECT TITLE</p>
                </div>
                <div class="site_info_child_input">
                    <input type="text">
                </div>
            </div>
            <div class="site_info_child">
                <div class="site_info_child_title">
                    <p>PROJECT LOCATION</p>
                </div>
                <div class="site_info_child_input">
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="weather_container">
            <p class="weather_title">WEATHER CONDITIONS</p>
            <div class="weather_container_child">
                <div class="weather_container_child_element">
                    <p>WINDY</p>
                    <input type="checkbox" id="checkbox4">
                </div>
                <div class="weather_container_child_element">
                    <p>OVERCAST</p>
                    <input type="checkbox" id="checkbox4">
                </div>
                <div class="weather_container_child_element">
                    <p>SUNNY</p>
                    <input type="checkbox" id="checkbox4">
                </div>
                <div class="weather_container_child_element">
                    <p>CLOUDY</p>
                    <input type="checkbox" id="checkbox4">
                </div>
                <div class="weather_container_child_element">
                    <p>RAIN</p>
                    <input type="checkbox" id="checkbox4">
                </div>
                <div class="weather_container_child_element">
                    <p>OTHER</p>
                    <input type="checkbox" id="checkbox4">
                </div>
            </div>
        </div>

        <div class="temperature_container">
            <p class="temperature_title">TEMPERATURE</p>
            <input type="text">
        </div>

        <div class="labor_container">
            <p class="labor_title">LABOR TRACKING</p>
            <p class="labor_sutitle">Skilled Labour</p>
            <div class="skilled_labor_container">
                <div class="skilled_labor_container1">
                    <div class="skilled_labor_container1_child">
                        <p>NAME(OF TEAM/PERSON)</p>
                    </div>
                    <div class="skilled_labor_container1_child">
                        <p>POSITION</p>
                    </div>
                    <div class="skilled_labor_container1_child">
                        <p>DESCRIPTION OF WORK</p>
                    </div>
                </div>
                <div class="skilled_labor_container2">
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                </div>
                <div class="skilled_labor_container2">
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                </div>
            </div>
            <p class="labor_sutitle">Unskilled Labour</p>
            <div class="skilled_labor_container">
                <div class="skilled_labor_container1">
                    <div class="skilled_labor_container1_child">
                        <p>NAME(OF TEAM/PERSON)</p>
                    </div>
                    <div class="skilled_labor_container1_child">
                        <p>POSITION</p>
                    </div>
                    <div class="skilled_labor_container1_child">
                        <p>DESCRIPTION OF WORK</p>
                    </div>
                </div>
                <div class="skilled_labor_container2">
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                </div>
                <div class="skilled_labor_container2">
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                    <div class="skilled_labor_container1_child">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>


        <div class="equipment_container">
            <p class="equipment_title">EQUIPMENT TRACKING</p>
            <div class="equipment_container">
                <div class="equipment_container1">
                    <div class="equipment_container1_child">
                        <p>TYPE</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>QUANTITY</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>WORK ASSIGNMENT</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>HOURS WORKED</p>
                    </div>
                </div>
                <div class="equipment_container2">
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                </div>
                <div class="equipment_container2">
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>


        <div class="equipment_container">
            <p class="equipment_title">WORKS ON SITE</p>
            <div class="equipment_container">
                <div class="equipment_container1">
                    <div class="equipment_container1_child">
                        <p>Works Definition</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>Zone/Location</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>Staus</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>%Completion</p>
                    </div>
                </div>
                <div class="equipment_container2">
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                </div>
                <div class="equipment_container2">
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>


        <div class="equipment_container">
            <p class="equipment_title">MATERIAL QUANTITY</p>
            <div class="equipment_container">
                <div class="equipment_container1">
                    <div class="equipment_container1_child">
                        <p>Type</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>Zone/Location</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>Quantity</p>
                    </div>
                    <div class="equipment_container1_child">
                        <p>Order No</p>
                    </div>
                </div>
                <div class="equipment_container2">
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                    <div class="equipment_container1_child">
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>


        <div class="safety_container">
            <p class="safety_title">SAFETY</p>
            <p class="safety_subtitle">Site inspection meeting/report;</p>
            <textarea id="message" name="message" style="width: 140vh;height: 30vh"></textarea>
            <p class="safety_subtitle">Recorded site incidents/accidents;</p>
            <textarea id="message" name="message" style="width: 140vh;height: 30vh"></textarea>
        </div>


        <div class="recommendations_container">
            <p class="recommendations_title">RECOMMENDATION/COMMENTS</p>
            <textarea id="message" name="message" style="width: 140vh;height: 30vh"></textarea>
        </div>


        <div  class="declaration_container">
            <p>
                I, <input type="text" id="name" name="name">, certify that I have compiled this site report and the information herein is accurate and up to date to the best of my knowledge.
            </p>
        </div>
        
        
        
    </body>
</html>

