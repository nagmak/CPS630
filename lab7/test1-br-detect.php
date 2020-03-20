<!DOCTYPE html> 
<head>       
<TITLE>how to detect browser using PHP </TITLE>
<script type="text/javascript" src="./br-detect.js"></script>   
</head>  
<body>        
    <h1> Php browser detect</h1>

    <?php          
        echo " Trying to detect Browser name! . <br/>";          
        function brdetect()          
        {                
            $res = $_SERVER['HTTP_USER_AGENT'];                    
            echo $res . "<br/><br/>";                
            if ( strpos ($res, "Chrome") == true)                   
            echo "Browser: Google Chrome";                
            else if ( strpos ($res, "Firefox") == true)                           
            echo "Browser: Firefox";                        
            else if ( strpos ($res, "Trident") == true)    
            echo "Browser: Internet Explorer";                                
            else  echo "Browser: unkown";           
        }           
        brdetect( );   
    ?> 
    
    <h1> javascript browser detect</h1>
        <div id="javascriptstuff">
        </div>

    </body> 
    </html>