@extends('layouts.app')

@section('content')
<div class="card card-style">
    <div class="content text-center">
        <h1>Enroll Course</h1>
    </div>
</div>


<div class="card card-style">
    <div class="content text-center">

        @if ($message = Session::get('status'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        </div>
        @endif

    </div>
</div>


<div class="card card-style">

    <form action="{{ route('enroll.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

    
    <div class="content mb-2">
        
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_1 ?? '' }}
					<br>
            [ {{ $questions->question_bn_1 ?? '' }} ]
        </p>


        <div class="input-style input-style-2 has-icon input-required">
            <i class="input-icon fa fa-user"></i>
            <span class="color-highlight input-style-1-inactive">Name</span>
            <em>(required)</em>
            <input class="form-control" name="name" type="text" placeholder="Name">
        </div>


        <div class="input-style input-style-2 has-icon input-required">
            <i class="input-icon fa fa-envelope"></i>
            <span class="color-highlight input-style-1-inactive">Email</span>
            <em>(required)</em>
            <input class="form-control" name="email" type="email" placeholder="Email">
        </div>


        <div class="input-style input-style-2 has-icon input-required">
            <i class="input-icon fa fa-mobile"></i>
            <span class="color-highlight input-style-1-inactive">Contact Number</span>
            <em>(required)</em>
            <input class="form-control" name="phone" type="number" placeholder="Contact Number">
        </div>

        <div class="input-style input-style-2 input-required mt-2">
            
            <span><i class="fa fa-briefcase"></i> Your Occupation?</span>
            <em><i class="fa fa-angle-down"></i></em>
            <select class="form-control" name="occupation_id">
                <option value="default" disabled selected>Your Occupation?</option>

                @foreach ($occupations as $occupation)
                    <option value="{{ $occupation->id }}">{{ $occupation->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="input-style input-style-2 has-icon input-required">
            <i class="input-icon fa fa-mobile"></i>
            <span class="color-highlight input-style-1-inactive">Your Age</span>
            <em>(required)</em>
            <input class="form-control" name="age" type="number" placeholder="Your Age">
        </div>


        

    </div>
</div>
<div class="card card-style">
    <div class="content">
        <h5>Your Gender?</h5>
        <div class="form-check icon-check mt-3">
            <input class="form-check-input" type="radio" name="gender" value="Male" id="q-1a">
            <label class="form-check-label" for="q-1a">Male</label>
            <i class="icon-check-1 far fa-circle color-gray-dark font-16"></i>
            <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
        </div>
        <div class="form-check icon-check">
            <input class="form-check-input" type="radio" name="gender" value="Femail" id="q-1b">
            <label class="form-check-label" for="q-1b">Female</label>
            <i class="icon-check-1 far fa-circle color-gray-dark font-16"></i>
            <i class="icon-check-2 fa fa-check-circle font-16 color-highlight"></i>
        </div>
    </div>
</div>



<div class="card card-style">
    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_7 ?? '' }}
					<br>
            [ {{ $questions->question_bn_7 ?? '' }} ]
        </p>


        <div class="input-style input-style-2 input-required mt-2">
            <span>Your level?</span>
            <em><i class="fa fa-angle-down"></i></em>
            <select class="form-control" name="study_level">
                <option value="default" disabled selected>Your level?</option>

                	<option value="">Select level*</option>
												<option value="PSC">PSC</option>
												<option value="JSC">JSC</option>
												<option value="SSC">SSC</option>
												<option value="HSC">HSC</option>
												<option value="HONORS">HONORS</option>
												<option value="MASTERS">MASTERS</option>

            </select>
        </div>
    </div>


    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_6 ?? ''}} <br> [ {{ $questions->question_bn_6 ?? ''}} ]
        </p>


        <div class="input-style input-style-2 input-required mt-2">
            <span>Your Course?</span>
            <em><i class="fa fa-angle-down"></i></em>
            <select class="form-control" id="course_id" name="course_id">
                <option value="default" disabled selected>Your Course?</option>

                	@foreach ($courses as $course)
						<option value="{{ $course->id }}">{{ $course->name }}( ৳{{ $course->is_discount === 1 ? $course->discount_price : $course->price }})</option>
					@endforeach

            </select>

            <input type="hidden" value="{{ route('get.course.price') }}" id="url">
            <input type="hidden" value="" id="course_price" name="course_price">

        </div>
    </div>


    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_6 ?? ''}} <br> [ {{ $questions->question_bn_6 ?? ''}} ]
        </p>


        <div class="input-style input-style-2 input-required mt-2">
            <span>Your Class Schedule?</span>
            <em><i class="fa fa-angle-down"></i></em>
            <select class="form-control" name="schedule_id">
                <option value="default" disabled selected>Your Class Schedule?</option>

                	@foreach ($schedules as $schedule)
						<option value="{{ $schedule->id }}">{{ $schedule->name }}</option>
					@endforeach

            </select>

        </div>
    </div>

    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_4 ?? ''}} <br> [ {{ $questions->question_bn_4 ?? ''}} ]
        </p>


        <div class="input-style input-style-2 input-required mt-2">
            <span>Select Payment Type</span>
            <em><i class="fa fa-angle-down"></i></em>
            <select class="form-control" name="payment_id">
                <option value="default" disabled selected>Select Payment Type</option>

                	@foreach ($payments as $payment)
						<option value="{{ $payment->id }}">{{ $payment->name }}</option>
					@endforeach

            </select>

        </div>
    </div>

    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_5 ?? ''}} <br> [ {{ $questions->question_bn_5 ?? ''}} ]
        </p>


        <div class="input-style input-style-2 input-required">
            <span class="input-style-1-inactive">Write here</span>
            <em>(required)</em>
            <textarea class="form-control" name="description" placeholder=""></textarea>
        </div>


    </div>

    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            {{ $questions->question_en_6 ?? ''}} <br> [ {{ $questions->question_bn_6 ?? ''}} ]
        </p>


        <div class="input-style input-style-2 input-required">
            <span class="input-style-1-inactive">Write here</span>
            <em>(required)</em>
            <textarea class="form-control" name="guardian_phone" placeholder=""></textarea>
        </div>


    </div>


    

<div class="card card-style">
    <div class="content">
        <p class="font-16 mt-n1 mb-0 pb-2">
            Before submitting the application please make sure you wrote all the informations correctly.
        </p>
        <button type="submit" class="btn btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s bg-blue-dark">Apply</button>
    </div>
</div>

</form>


<div data-menu-load="menu-footer.html"></div>
@endsection
