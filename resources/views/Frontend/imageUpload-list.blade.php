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
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($items as $item)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{ $i}}</td>
                                    <td>
                                        @if($item->name != '')
                                         <img width='150px' height='150px' src={{asset('uploads/'.$item->name)}}>
                                        @else {{"N/A"}}
                                        @endif
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