<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/selectCourse.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
    
<body>
    
    
    <div class="d-flex flex-column justify-content-center w-100 h-100">
	<div class="d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
    <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
		<div class="bigContainer">
            <form action="/updateInfo/{{$editstudent['student_id'] }}" class="form-container" method="POST">
    @csrf
    @method('put')
     <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label form-label">Student Name:</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control-plaintext form-label" name="sname" id="staticEmail" style="border:1px solid white; color:white;" value="{{ $editstudent-> sname }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label form-label">Student Email:</label>
    <div class="col-sm-9">
      <input type="text"  class="form-control-plaintext form-label" name="email" id="staticEmail" style="border:1px solid white; color:white;" value="{{ $editstudent-> email }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="Course1" class="col-sm-3 col-form-label form-label">Class Selection:</label>
    <div class="col-sm-9">
        <div class="course">
            <select style="width: 80%; margin-top:2%;" name="courseone" id="nameid" value="{{ $editstudent-> courseone  }}" id="class-date">
                <option></option>
                @foreach($redirectdata as $d)
  <option>{{$d->title}}</option>
@endforeach
            </select>
        </div>
    </div>
  </div>
    
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label form-label">Class ID:</label>
        <div class="col-sm-9">
          <input type="number"  class="form-control-plaintext form-label" name="subject_id" id="staticEmail" style="border:1px solid white; color:white;" value="{{ $editstudent-> subject_id  }}">
        </div>
      </div>
    <div class="btn-container">
    <a href="calendarUI.html" class="cancel-Btn" style="text-decoration: none; text-align: center;">Cancel</a>
    <button type="submit" class="edit-Btn">Update</button>
    </div>
</form>
    </div>
	</div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">
      $("#nameid").select2({
            placeholder: "Update Student Subject",
            allowClear: true
        });
</script>
</body>
</html> 
