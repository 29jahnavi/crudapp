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
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Post</h4>
                </div>
                <div class="card-body">
                    <form  id="addpost" class="separate-form" enctype="multipart/form-data">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h5 class="from-title mb-1">Add some Post with Image</h5>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="@isset($items['id']){{$items['id']}} @endisset" >
                                        <label for="" class="col-form-label">Write a Post</label>
                                        <input class="form-control" type="text" id="post" name="post" placeholder="Write your post here.." value="@isset($items['post']){{$items['post']}} @endisset">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Select Image</label>
                                        <input type="hidden" name="old_img" value="@isset($items['image']) {{$items['image']}} @endisset">
                                        <input class="form-control" type="file" name="image" value="@isset($items['image']) {{$items['image']}} @endisset" id="image">
                                    </div>
                                </div>  
                            </div>                 
                            <hr class="mt-4 mb-4">
                            <div class="form-group mb-0">
                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                            </div>
                            <div class="form-group mb-0">
                               <p id="err_msg"></p>
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