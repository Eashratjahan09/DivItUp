<html>
    <!-- <head>
        <title>
            DivItup
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../../myFunction.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        
        
    </head> -->
    <body >

       <form action="/action_page.php">
                    <label for="Type">Type:</label><br>
                    <select id="Type" name="Type">
                      <option value="Task">Task</option>
                      <option value="Subtask">Subtask</option>
                    </select>
                  </form>
                  
                <label for="">Summary</label><label style="color: red;">*</label><br>
                <textarea id="summary" name="summary" rows="2" cols="50" placeholder="Enter Summary">
                    </textarea>

                <label for="">Description</label><br>
                 <textarea id="Description" name="Description" rows="2" cols="50" placeholder="Enter Description">
                </textarea>
                    
                

                <div>
                    <label for="">Deadline</label><br>
                    <input type="datetime-local" id="deadline" name="deadline">
                </div>
                <div>
                    <label for="">Attachments</label><br>
                    <input type="file" id="myfile" name="myfile" >
                </div>
                <div>
                    <label for="">Assignee</label><br>
                    <form autocomplete="off" action="/action_page.php">
                        <div class="autocomplete" style="width:300px;">
                          <input id="myInput" type="text" name="myCountry" placeholder="Assign member"> <input type="submit" >
                        </div>
                        
                      </form>
                      <label><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</label>
                </div>


    </body>
</html>
