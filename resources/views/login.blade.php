<!-- Dark mode not enabled -->
<html>
    <head>
      <title>CodeKit Login</title>
      <link rel='icon' href="https://scontent.fhan5-4.fna.fbcdn.net/v/t1.6435-9/152406961_1802432383270100_3355430014002109187_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8631f5&_nc_ohc=WYGiRhCcNtsAX-zJRuj&tn=GNg9XADo8URz-FIm&_nc_ht=scontent.fhan5-4.fna&oh=99c02c5b488d20d5de95436aad6422ce&oe=61834C9B"  />
      <!-- https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <style>
          .abcd{
            background-color: 	#FF0000;
          }
        </style>
        <body>
            <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:

  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->

<<<<<<< HEAD
<!-- <div class="fb-login-button" >Login with Facebook</div> -->
=======
<!-- <div class="fb-login-button" >Login with Facebookfgdfgasfd</div> -->
>>>>>>> master
<div class="min-h-screen flex items-center justify-center bg-blue-100 py-12 px-4 sm:px-6 lg:px-8">
 
   
 
    <img  style="border:20px;margin:50px;float:left;width:500px;height: 500px;" class=" object-scale-down" src="https://scontent.fhan5-4.fna.fbcdn.net/v/t1.6435-9/152406961_1802432383270100_3355430014002109187_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8631f5&_nc_ohc=WYGiRhCcNtsAX-zJRuj&tn=GNg9XADo8URz-FIm&_nc_ht=scontent.fhan5-4.fna&oh=99c02c5b488d20d5de95436aad6422ce&oe=61834C9B">
     <hr>

    <div class="max-w-md w-full space-y-8">
        
      <div>

        <img class="mx-auto h-12 w-auto rounded-full" src="https://scontent.fhan5-4.fna.fbcdn.net/v/t1.6435-9/152406961_1802432383270100_3355430014002109187_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8631f5&_nc_ohc=WYGiRhCcNtsAX-zJRuj&tn=GNg9XADo8URz-FIm&_nc_ht=scontent.fhan5-4.fna&oh=99c02c5b488d20d5de95436aad6422ce&oe=61834C9B" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">
        Welcome to codekit
        <br>Group 1
        <br>Login from here to access 
        </h2>
        <!-- <h3 >
            Login from here to access
          <a href="create.html" class="font-medium text-blue-600 hover:text-blue-500">
          Create new account
          </a>
        </h3> -->
      </div>
      <form id="login-form" class="mt-8 space-y-6" action="#" method="POST">
      @csrf
        <input type="hidden" name="remember" value="true">
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <?php

// alert alert-danger text-center text-danger

            $message=session()->get('message');
              if( $message){
                  echo'<div class="rounded-full abcd text-center p-3 mb-2 bg-danger text-white">'.$message.'</div>';
                  $message=session()->put('message',null);
                }
            ?>
            <label for="email-address" class="sr-only">Email address</label>
            <input  name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Email address" required>
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Password" required>
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" value="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              Remember me
            </label>
          </div>
  
          <!-- <div class="text-sm">
            <a href="boxing.html" class="font-medium text-blue-600 hover:text-blue-500">
              Forgot your password?
            </a>
          </div> -->
        </div>
  
        <div>
          <button id="signin" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: lock-closed -->
              <svg class="h-5 w-5 text-blue-50 group-hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            Login
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- <footer class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/1200px-Facebook_f_logo_%282019%29.svg.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-white-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">Facebook</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 Facebook —
        <a href="https://www.instagram.com/aliraza.ramzan2005/" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@aliraza.ramzan2005</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
       
        </body>
    </head> -->
</html>