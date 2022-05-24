
@include ('finallayout.view')

    <!-- Page Title Start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-title-wrapper">
                <div class="page-title-box">
                    <h4 class="page-title">Form</h4>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li class="breadcrumb-link">
                            <a href="{{url('/')}}"><i class="fas fa-home mr-2"></i>Dashboard</a>
                        </li>
                        <li class="breadcrumb-link active">Form</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- From Start -->
    <div class="from-wrapper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add</h4>
                    </div>
                    <div class="card-body">
                        <form id="yourform2" class="separate-form">
                            {{-- @csrf
                            @method('PUT') --}}
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Info</h5>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="@isset($items['id']){{$items['id']}} @endisset">
                                            <label for="" class="col-form-label">First Name</label>
                                            <input class="form-control" type="text" id="fname" name="fname" placeholder="Your first name.." value="@isset($items['fname']){{$items['fname']}} @endisset">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Last Name</label>
                                            <input class="form-control" type="text" id="lname" name="lname" placeholder="Your last name.." value="@isset($items['lname']){{$items['lname']}} @endisset">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Email</label>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="Your email address.." value="@isset($items['email']){{$items['email']}} @endisset">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-4 mb-4">
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                </div>
                                <div class="form-group mb-0">
                                   <p id="err_msg" ></p>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@include ('finallayout.foot')
<script type="text/javascript" src="{{url('assets/js/jquery.js')}}"></script>