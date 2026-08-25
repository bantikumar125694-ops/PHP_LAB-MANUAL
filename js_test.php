<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<body>
       
    <div id="data_js">
       hello
    </div>

    <button onclick="data_change()">
        click
        </button>

            <script>
                function data_change() {
                      // GET DATA 
                        var str = document.getElementById("data_js").innerText;
                        document.write(str+ " from js");

                       // SET DATA
                        var data  = document.getElementsByName('div')[0];
                      data.innerHTML = "<h1> hello this is new data </h1>";
                    }   
            </script>
                    
    <script>

      


    </script>


</body>
</html>