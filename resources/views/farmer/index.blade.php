@extends('auth.app')
@section('title','farmer Login')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>
    <!-- =======================
    Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-10 col-lg-8 col-xl-6">
                    <div class="p-4 rounded p-sm-5 bg-primary-soft">
                        <h2>Log in to your account</h2>
                        @include('includes.messages')
                        <!-- Form START -->
                        <form class="mt-4" action="/farmer" method="POST">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                    id="exampleInputEmail1" placeholder="E-mail" required>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="*********" required>
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">Sign me in</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
<<<<<<< HEAD
                                    <span>Don't have an account? <a href="/admin/register"><u>Sign up</u></a></span>
=======
                                    <span>Don't have an account? <a href="/farmer/register"><u>Sign up</u></a></span>
>>>>>>> 838b83a9268203c70284163cf8d8eb72b0a84ed2
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
<!-- **************** MAIN CONTENT END **************** -->
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 838b83a9268203c70284163cf8d8eb72b0a84ed2
