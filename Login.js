        // Function to display hidden typed password
        function myFunction() 
        {
        var temp = document.getElementById("myInput");
        if (temp.type === "password")
            {
                temp.type = "text";
            } 
        else
            {
                temp.type = "password";
            }
        }

        function homepage()
        {
            var temp = document.getElementById("myName").value;
            var temp2 = document.getElementById("myInput").value;
            console.log(temp);
            console.log(temp2);
            if (temp == "" || temp2 == "")
            {
                alert("Username or password not entered");
            }
            else{
                document.location.href = "Homepage.html"
            }
            
        }