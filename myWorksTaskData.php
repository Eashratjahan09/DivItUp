<html>
    <head>
        <title>
            DivItup
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="myFunction.js"></script>
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
        
        
    </head>
    <body >
      
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #076A96;">Task Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <h6 style="color:#076A96;">Task Name</h6>

                <form action="/action_page.php">
                    <label for="Type">Status:</label><br>
                    <select id="Type" name="Type">
                      <option value="todo">To-Do</option>
                      <option value="inprog">In-Progress</option>
                      <option value="done">Done</option>
                    </select>
                  </form>
                  
                <label for="">Summary</label><label style="color: red;">*</label><br>
                <textarea id="summary" name="summary" rows="2" cols="50" placeholder=" Summary">
                    </textarea>

                <label for="">Description</label><br>
                 <textarea id="Description" name="Description" rows="2" cols="50" placeholder=" Description">
                </textarea>
                    
                <br>
                <label for="">Report</label><br>
                <textarea id="report" name="report" rows="2" cols="50" placeholder="Enter Report">
                </textarea>

                <div>
                    <label for="">Deadline: </label><br>
                    <label for="" style="border: 1px solid rgb(63, 63, 63);">00/00/00</label>
                </div>
                <div>
                    <label for="">Attachments</label><br>
                    <input type="file" id="myfile" name="myfile" >
                </div>
                <div>
                    <label for="">Assigned By</label><br>
                      <label><img src="images/Ellipse 1.png" alt="lead profile image" class="profileImage">Kazi Mohammad Fahmi</label>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
      
    </body>
</html>
