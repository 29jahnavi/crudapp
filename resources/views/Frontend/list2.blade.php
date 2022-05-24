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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($items as $item)
                                <?php $i++ ?>
                                <tr>
                                    <td>{{ $i}}</td>
                                    <td>{{$item['fname']}}</td>
                                    <td>{{$item['lname']}}</td>
                                    <td>{{$item['email']}}</td>
                                    <td>
                                        <div class="btn-group btn-group-pill mt-2" role="group" aria-label="Basic example">
                                            <a class="btn btn-primary sm-btn" href="{{url('form2/'.$item['id'].'/edit')}}">Edit</a>
                                            <form action="{{url('form2/'.$item['id'])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <button class="btn btn-danger sm-btn" type="submit">Delete</button>
                                            </form>
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