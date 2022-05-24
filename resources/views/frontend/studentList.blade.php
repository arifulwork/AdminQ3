<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/assets/teacherClass2.css') }}">
    <script src="{{ asset('/assets/deleteClass.js') }}"></script>

    
</head>
<body>
  <div class="context">
      <div class="big-back-class-container">
           <div class="back-class-container">
           <a href="teacherUI.html"><i class="fa-solid fa-circle-arrow-left"></i></a>
               <h1>Student List</h1></div></div>
      <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
                <form action="/searchStudents" method="GET" >
                    @csrf
                     <input type="text" name="search" placeholder="Search..">
                           <select name="classDetail" id="classDetail">
                              <option value="className">Class Name</option>
                           </select>
                          <input type="submit" class="searchBtn" id="searchBtn" value="Search">
                          @if (session('status'))
                          <h6 class="alert alert-success">{{ session('status') }}</h6>
                      @endif
                  </form>
                    <!-- Trigger/Open The Modal -->
                    <form method="get" action="/assignCourse">
                      <button id="myBtn" class="addbtn">Assign Student</button>
                    </form>
                   </div>
               </div>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                        <div class="modal-header">
                        <span class="close">&times;</span>
                        <form action="" class="form-container">
                        <h1>Add New Classes</h1>

                        <label for="class-title" style="color:black;"><b>Class Title:</b></label>
                        <input type="text" placeholder="Enter the class title.." id="class-title" required><br>

                        <label for="class-date" style="color:black;"><b>Start Date:</b></label>
                        <input type="date" placeholder="Enter the class date.." id="class-date" required>

                        <label for="class-seat" style="color:black;"><b> Total of Seat:</b></label>
                        <input type="text" value="30 Pax" id="class-seat" disabled><br>

                        <label for="class-start-time" style="color:black;"><b>Start Time:</b></label>
                        <input type="time" placeholder="Enter the class start time.." id="class-start-time" required>

                        <label for="class-end-time" style="color:black;"><b>End Time:</b></label>
                        <input type="time" placeholder="Enter the class end time.." id="class-end-time" required>
                            
                        <label for="class-title" style="color:black;"><b>Class Number:</b></label>
                        <input type="number" placeholder="Enter the class title.." id="class-title" required>

                        <div class="buttonAction" id="class-end-time">
                        <button type="submit" class="btn add" onclick="myFunction()">Add</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
                        </div>
                        </form>
                        </div>
                        </div></div>
                        <!-- if successful added pop out this message -->
                        <div id="snackbar">Class has been successfully added.</div>
      
      
           <div class="bigContainer">
    <div class="sub-container">
    <div class="sub-container1">
        @foreach ($list as $i)
        
        <button class="button1">
            <div class="className-dropdownIcon-container">
                <div class="className">{{ $i -> sname }}</div>
                <div class="dropdown">
                <div class="dropdownIcon">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <div class="dropdown-content">
                        <a href="/edit-info/{{ $i['subject_id'] }}">Update Class Detail</a>
                        <a href="/DeleteStudent/{{ $i['subject_id'] }}" class="delete">Remove Class</a>
                        <a href="">Export Class Information</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="big-date-time-container">
                <div class="date-time-container">
                    <div class="class-date">Email: {{ $i -> email }}</div> <br>
                    <div class="class-time">Course: {{ $i -> courseone }}</div>
                </div>
                <div class="seat">10/30 seat</div>
            </div>
        </button>
        @endforeach

        

        
       
       
                
        
        
       
      
    </div>
    </div>
    </div>
    </div>

<div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
</div>
</body>
</html> 
<script src="newClassForm.js"></script>