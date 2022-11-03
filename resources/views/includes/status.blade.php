@if ($errors->any())
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    @foreach ($errors->all() as $error)
                                    <strong>{{ $error }}</strong>
                                    @endforeach
                                </div>
                                @elseif(session()->has('status'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{{ session('status') }}</strong>
                                </div>
                                @endif