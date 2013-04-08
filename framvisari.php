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
            setInterval("fetch();", 50);
        });
        
        function fetch() {
                $.getJSON('lesFeed.php', function(json) {
                    document.getElementById('feedSpot').innerHTML = json.ting;
                });
        }
    </script>
    
    <p id="feedSpot"></p>
</body>
</html>