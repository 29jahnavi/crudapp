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
                            <form class="separate-form" id="subcategory" enctype="multipart/form-data">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h5 class="from-title mb-1">Sub Category Management</h5>
                                <input type="hidden" name="id" value="@isset($items['id']){{$items['id']}} @endisset" >
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="" class="col-form-label">Categories</label>
                                            <select name="categoryname" class="form-control">
                                                <option value="">Select Category</option>
                                                    @foreach($items['categoryname'] as $c_id)
                                                    <option value="{{ $c_id->id }}"  @isset($items['c_id'])  @if( $c_id->id == $items['c_id']) selected @endif @endisset>{{ $c_id->categoryname }}</option>
                                                    @endforeach    
                                            </select>      
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="member-name" class="col-form-label">Sub Category Name</label>
                                            <input class="form-control" type="text" name="subcategoryname" placeholder="Enter Sub Category Name.." value="@isset($items['subcategoryname']){{$items['subcategoryname']}} @endisset" id="subcategoryname">
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