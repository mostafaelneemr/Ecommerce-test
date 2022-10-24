@extends('admin.admin_master')

@section('admin')
    <div class="container-full">
        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Update Admin Password</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{route('update.changePassword')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5> Current Password <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" id="oldpassword" name="oldpassword" class="form-control"></div>
                                                </div>
                                            </div> <!-- end col md 6 -->

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>New Password<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" id="password" name="password" class="form-control"></div>
                                                </div>
                                            </div> <!-- end col md 6 -->

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Confirm Password<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"></div>
                                                </div>
                                            </div> <!-- end col md 6 -->
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-success mb-5" value="update" />
                                </div>
                            </form>
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.box-body -->
            </div><!-- /.box -->
        </section>
    </div>
@endsection

