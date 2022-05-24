@include ('finallayout.view')

        <!-- Page Title Start -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-title-wrapper">
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <form class="separate-form" id="category" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h5 class="from-title mb-1">Category Management</h5>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="@isset($items['id']){{$items['id']}} @endisset" >
                                        <label for="member-name" class="col-form-label">Your Category Name</label>
                                        <input class="form-control" type="text" name="categoryname" placeholder="Enter Category Name.." value="@isset($items['categoryname']){{$items['categoryname']}} @endisset" id="categoryname">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="company-name" class="col-form-label">Display Order</label>
                                        <input class="form-control" type="text" name="displayorder" placeholder="Enter Number of Orders.." value="@isset($items['displayorder']){{$items['displayorder']}} @endisset" id="numeric">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                            </div>
                            <div class="form-group mb-0">
                                <p id="error"></p>
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