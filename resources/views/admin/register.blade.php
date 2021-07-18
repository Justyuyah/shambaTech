@extends('auth.app')
@section('title','Admin Register')
@section('content')
<main>
    <!-- =======================
Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-10 col-lg-8 col-xl-6">
                    <div class="p-4 rounded bg-primary-soft p-sm-5">
                        <h2>Create your free account </h2>
                        @include('includes.messages')
                        <!-- Form START -->
                        <form class="mt-4" action="/admin/register" method="POST">
                            @csrf
                            <!-- name -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" required>
                                <small id="emailHelp" class="form-text">We'll never share your email with anyone
                                    else.</small>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="*********" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword2">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="exampleInputPassword2" placeholder="*********" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Yes i agree Terms &
                                    Condition</label>
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">Sign me up</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>Have an account? <a href="/farmer"><u>Sign in</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Inner intro END -->
</main>
@endsection