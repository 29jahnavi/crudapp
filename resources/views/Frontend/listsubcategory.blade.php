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
                                <th>Category Name</th>
                                <th>Sub Category name</th>
                                <th>Display Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($items as $item)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{ $i}}</td>
                                    <td>{{$item['categories']['categoryname']}}</td>
                                    <td>{{$item['subcategoryname']}}</td>
                                    <td>{{$item['displayorder']}}</td>
                                    <td>
                                        <div class="btn-group btn-group-pill mt-2" role="group" aria-label="Basic example">
                                            <a class="btn btn-primary sm-btn" href={{url('editsubcat/'.Crypt::encrypt($item['id']))}}>Edit</a>
                                            <a class="btn btn-danger sm-btn" href="{{url('delete-subcat/' .$item['id'])}}">Trash</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-danger sm-btn" href="{{url('/subcategory/trash')}}">Go To Trash</a>
    </div>
    @include ('finallayout.foot')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>