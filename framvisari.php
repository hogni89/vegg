<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Projection of feed</title>
    <script src="jquery-1.7.2.min.js"></script>
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            font-size: 2em;
        }
        
        #feedSpot {
            
        }
    </style>
</head>
<body>
    <script>
    var i = 0;
        $(document).ready(function(){
            heinta();
        });
        
        function heinta() {
            $.ajax({
                url:"lesFeed.php",
                type:"post",
                success:function(data) {
                    if(data != "") {
                        document.getElementById('feedSpot').innerHTML = data.ting;
                    }
                }, dataType: "json", complete: heinta, timeout: 30000
            });
        }
    </script>
    
    <p id="feedSpot"></p>
</body>
</html>