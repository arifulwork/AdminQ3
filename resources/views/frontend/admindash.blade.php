<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/assets/teacherClass.css') }}">
    <script src="{{ asset('/assets/deleteClass.js') }}"></script>

    

    
</head>


<body>
       <div class="context">
           <h1>Admin Dashboard</h1>
           <div class="search-add-classContainer">
               <div class="search-add-classContainer2">
               <form>
                   <input type="text" name="search" placeholder="Search..">
                         <select name="classDetail" id="classDetail">
                            <option value="className">Class Name</option>
                         </select>
                        <input type="submit" name="searchBtn" id="searchBtn" value="Search">

                        @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                </form>
                   <!-- Trigger/Open The Modal -->
                   <button id="myBtn" class="addbtn">Add New Course</button>
                   </div>
               </div>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                        <div class="modal-header">
                        <span class="close">&times;</span>
                        <form action="{{ url('add-course') }}" class="form-container"  method="POST">
                            @csrf
                        <h1>Add New Course</h1>

                        <label for="class-title"><b>Course Title:</b></label>
                        <input type="text" name="title" placeholder="Enter the class title.." id="class-title" required><br>
                            
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
        @foreach ($files as $i )
        <button class="button1">
            <div class="className-dropdownIcon-container">
                <a href="/classschedule/{{ $i['course_id'] }}"><div class="className">{{ $i -> title }}</div></a>
                <div class="dropdownIcon">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <div class="dropdown">
                    <div class="dropdown-content">
                        <!-- Trigger/Open The Modal -->
                        <a href="editClassName.html">Update Class</a>
                        <div class="delete" onclick="deleteClass()">Remove Class</div>
                        <div class="export">Export Class</div>
                    </div>
                </div>
                </div>
            </div>
            <a href="/classschedule">
        </a>
        @endforeach
        </button>
    
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
<script src="{{ asset('/assets/newClassForm.js') }}"></script>

