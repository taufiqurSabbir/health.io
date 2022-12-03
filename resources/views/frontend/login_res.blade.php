@extends('.frontend.layout.usermaster')

@section('content')

    <link rel="stylesheet" href="assets/login_res/style.css">
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome back,</h2>
            <form action="{{route('submit.login')}}" method="post">
                {{csrf_field()}}
                <label>
                    <span>Email</span>
                    <input type="email" name="email"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password"/>
                </label>
                <br>
                <input type="submit" class="submit" value="Sign In">

            </form>

        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2 class="sign_up_h">New here?</h2>
                    <p class="sign_up_p">Sign up and discover great amount of new opportunities!</p>
                </div>
                <div class="img__text m--in">
                    <h2 class="sign_up_h">One of us?</h2>
                    <p class="sign_up_p">If you already has an account, just sign in. We've missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Time to feel like home,</h2>
                <form action="{{route('submit.login')}}" method="post">
                    {{csrf_field()}}
                <label>
                    <span>Name</span>
                    <input type="text" name="name"/>
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password"/>
                </label>
                    <br>
                    <input type="submit" class="submit" value="Sign Up">
                </form>
            </div>
        </div>
    </div>

    <a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link">
        <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">
    </a>
    <a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
        <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
    </a>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
@endsection
