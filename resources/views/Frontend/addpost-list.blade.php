@include ('finallayout.view')
    <div class="row">
        <!-- Styled Table Card-->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card table-card">
                <div class="card-body">
                    <table id="example_list" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Add Post</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($items as $item)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{ $i}}</td>
                                    <td>{{$item['post']}}</td>
                                    <td>
                                        @if($item->image != '')
                                         <img width='150px' height='150px' src={{asset('uploads/images/'.$item->image) }}>
                                        @else {{"N/A"}}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-pill mt-2" role="group" aria-label="Basic example">
                                            <a class="btn btn-primary sm-btn" href="{{url('addpost-edit/'.Crypt::encrypt($item['id']))}}">Edit</a>
                                            <a class="btn btn-danger sm-btn" href="{{url('addpost-delete/'.$item['id'])}}">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include ('finallayout.foot')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>