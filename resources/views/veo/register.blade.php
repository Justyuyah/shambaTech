@extends('auth.app')
@section('title','Veo Register')
@section('content')
<script src="/assets/js/regions_districts.js"></script>
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
                        <form class="mt-4" action="/veo/register" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- name -->
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputEmail1">First Name</label>
                                        <input type="text" name="firstName" value="{{old('firstName')}}"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- name -->
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputEmail1">Last Name</label>
                                        <input type="text" name="lastName" value="{{old('lastName')}}"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <!-- name -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">UserName</label>
                                <input type="text" name="userName" value="{{old('userName')}}" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UserName"
                                    required>
                            </div>
                            <!-- phone -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">MobileNumber</label>
                                <input type="tel" name="mobileNumber" value="{{old('mobileNumber')}}"
                                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Mobile Number" required>
                                <small id="emailHelp" class="form-text">We'll never share your mobile Number with anyone
                                    else.</small>
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
                                    <label class="form-label" for="exampleInputEmail1">Select Region You From</label>
                                    <select name="region" id="select1" onchange="populate('select1','select2')"
                                        class="form-control" required>
                                        <option value="">Select Region</option>
                                        <option value="ARUSHA">ARUSHA</option>
                                        <option value="DAR ES SALAAM">DAR-ES-SALAAM</option>
                                        <option value="DODOMA">DODOMA</option>
                                        <option value="GEITA">GEITA</option>
                                        <option value="IRINGA">IRINGA</option>
                                        <option value="KAGERA">KAGERA</option>
                                        <option value="KATAVI">KATAVI</option>
                                        <option value="KIGOMA">KIGOMA</option>
                                        <option value="KILIMANJARO">KILIMANJARO</option>
                                        <option value="LINDI">LINDI</option>
                                        <option value="MANYARA">MANYARA</option>
                                        <option value="MARA">MARA</option>
                                        <option value="MBEYA">MBEYA</option>
                                        <option value="MOROGORO">MOROGORO</option>
                                        <option value="MTWARA">MTWARA</option>
                                        <option value="MWANZA">MWANZA</option>
                                        <option value="NJOMBE">NJOMBE</option>
                                        <option value="PEMBA KUSINI">PEMBA-KUSINI</option>
                                        <option value="PEMBA KASKAZINI">PEMBA-KASKAZINI</option>
                                        <option value="PWANI">PWANI</option>
                                        <option value="RUKWA">RUKWA</option>
                                        <option value="RUVUMA">RUVUMA</option>
                                        <option value="SHINYANGA">SHINYANGA</option>
                                        <option value="SIMIYU">SIMIYU</option>
                                        <option value="SINGIDA">SINGIDA</option>
                                        <option value="SONGWE">SONGWE</option>
                                        <option value="TABORA">TABORA</option>
                                        <option value="TANGA">TANGA</option>
                                        <option value="UNGUJA MJINI">UNGUJA-MJINI</option>
                                        <option value="UNGUJA KUSINI">UNGUJA-KUSINI</option>
                                        <option value="UNGUJA KASKAZINI">UNGUJA-KASKAZINI</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="exampleInputEmail1">Select Region You From</label>
                                    <select name="district" id="select2" class="form-control" required>
                                        <option value="#">Select District</option>
                                    </select>
                                </div>
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
                                    <span>Have an account? <a href="/veo"><u>Sign in</u></a></span>
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
