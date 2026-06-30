<x-guest-layout>
    <!-- We override the default background with inline styles for this specific page to match the dark outer background in the mockup -->
    <style>
        body { display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 2rem; }
        .wave-bg {
            background-image: url("data:image/svg+xml,%3Csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,50 Q100,0 200,50 T400,50 T600,50 T800,50' stroke='%23f1f5f9' fill='none' stroke-width='2' opacity='0.5'/%3E%3C/svg%3E");
            background-size: cover;
        }
    </style>

    <!-- Main Container Card -->
    <div class="w-full max-w-[1200px] bg-white rounded-[2.5rem] p-8 lg:p-12 shadow-2xl relative overflow-hidden flex flex-col min-h-[85vh]">
        <!-- Subtle background pattern -->
        <div class="absolute inset-0 wave-bg pointer-events-none"></div>

        <div class="flex flex-col lg:flex-row flex-1 relative z-10 gap-12 lg:gap-8">
            
            <!-- Left Column: Branding & Features -->
            <div class="w-full lg:w-3/5 flex flex-col justify-between">
                
                <!-- Logo -->
                <div class="flex justify-between items-start mb-8 lg:mb-12">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo-new.jpeg') }}" alt="Skillstryx Academy" class="h-10 object-contain mix-blend-multiply">
                    </div>
                    
                    <div class="flex items-center text-gray-500 text-sm lg:hidden">
                        <i class="fas fa-headset text-blue-600 text-lg mr-2"></i>
                        <div>
                            <p class="font-semibold text-gray-900 leading-none">Need Help?</p>
                            <a href="mailto:support@skillstryx.com" class="hover:text-blue-600 transition text-xs">support@skillstryx.com</a>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="flex-1 flex flex-col lg:flex-row gap-8 items-center lg:items-start relative">
                    <!-- Text & Features -->
                    <div class="w-full lg:w-1/2 z-10">
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-4 tracking-tight">
                            Your Learning Journey<br>
                            Starts <span class="text-blue-600">Here.</span>
                        </h1>
                        <p class="text-gray-500 text-sm lg:text-base mb-8 max-w-sm leading-relaxed">
                            Access your courses, track your progress, and achieve your academic goals with Skillstryx.
                        </p>

                        <div class="space-y-6">
                            <!-- Feature 1 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 border border-blue-100">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">My Courses</h3>
                                    <p class="text-gray-500 text-xs">Access all your enrolled courses<br>in one place.</p>
                                </div>
                            </div>
                            <!-- Feature 2 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-slate-50 flex items-center justify-center text-slate-600 border border-slate-200">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Track Progress</h3>
                                    <p class="text-gray-500 text-xs">Monitor your performance and<br>stay on track.</p>
                                </div>
                            </div>
                            <!-- Feature 3 -->
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600 border border-purple-100">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Achieve Goals</h3>
                                    <p class="text-gray-500 text-xs">Complete courses and earn<br>certificates.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3D Illustration -->
                    <div class="w-full lg:w-1/2 absolute right-0 top-10 lg:top-0 h-full pointer-events-none hidden lg:block">
                        <img src="{{ asset('images/student-3d.png') }}" alt="Student Learning" class="w-full h-auto object-contain max-h-[500px] translate-x-12 -translate-y-12 mix-blend-multiply opacity-90">
                    </div>
                </div>

                <!-- Bottom Blue Banner -->
                <div class="mt-12 bg-gradient-to-r from-[#2143E0] to-[#4062F6] rounded-2xl p-6 lg:p-8 flex flex-col sm:flex-row items-center justify-between shadow-lg relative overflow-hidden max-w-[85%]">
                    <div class="absolute right-0 top-0 w-32 h-32 bg-white/10 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2"></div>
                    
                    <div class="flex items-center gap-4 relative z-10 w-full sm:w-auto mb-4 sm:mb-0">
                        <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center text-white shrink-0 border border-white/10">
                            <i class="fas fa-graduation-cap text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Keep Learning, Keep Growing</h4>
                            <p class="text-blue-100 text-xs mt-1 max-w-[250px]">Join thousands of students who are building their future with Skillstryx.</p>
                        </div>
                    </div>
                    
                    <a href="#" class="px-5 py-2.5 bg-white text-blue-700 font-semibold rounded-xl text-sm whitespace-nowrap hover:bg-gray-50 transition relative z-10 shadow-sm shrink-0 flex items-center gap-2 w-full sm:w-auto justify-center">
                        Explore Courses <i class="fas fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Login Form -->
            <div class="w-full lg:w-2/5 flex flex-col items-end">
                
                <div class="hidden lg:flex items-center text-gray-500 text-sm mb-8">
                    <i class="fas fa-headset text-blue-600 text-xl mr-3 bg-blue-50 w-10 h-10 rounded-full flex items-center justify-center"></i>
                    <div>
                        <p class="font-semibold text-gray-900 leading-none mb-1">Need Help?</p>
                        <a href="mailto:support@skillstryx.com" class="hover:text-blue-600 transition text-xs">support@skillstryx.com</a>
                    </div>
                </div>

                <div class="w-full bg-white rounded-3xl p-8 lg:p-10 shadow-[0_10px_40px_rgba(0,0,0,0.06)] border border-gray-100 relative z-10">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Student Portal</h2>
                        <p class="text-gray-500 text-sm">Welcome back! Please log in to your account.</p>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-5">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-900 mb-1.5">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                    class="w-full !pl-11 !pr-4 py-3 bg-white border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder:text-gray-400" placeholder="Enter your email">
                            </div>
                            @if($errors->has('email'))
                                <div class="mt-3 bg-red-50 rounded-xl p-3 flex items-start gap-2 border border-red-100">
                                    <i class="fas fa-exclamation-circle text-red-500 mt-0.5 text-sm"></i>
                                    <p class="text-xs font-medium text-red-800">
                                        {!! $errors->first('email') !!}
                                    </p>
                                </div>
                            @endif
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-900 mb-1.5">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                    <i class="fas fa-lock text-[13px]"></i>
                                </div>
                                <input id="password" type="password" name="password" required autocomplete="current-password"
                                    class="w-full !pl-11 !pr-11 py-3 bg-white border border-gray-200 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder:text-gray-400" placeholder="Enter your password">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 cursor-pointer hover:text-gray-600">
                                    <i class="far fa-eye-slash text-sm"></i>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between pt-1 pb-1">
                            <label for="remember_me" class="flex items-center cursor-pointer group">
                                <div class="relative flex items-center justify-center">
                                    <input id="remember_me" type="checkbox" class="peer sr-only" name="remember">
                                    <div class="w-4 h-4 bg-white border-2 border-gray-300 rounded peer-checked:bg-blue-600 peer-checked:border-blue-600 transition-colors"></div>
                                    <i class="fas fa-check text-white text-[10px] absolute opacity-0 peer-checked:opacity-100"></i>
                                </div>
                                <span class="ml-2 text-sm text-gray-700 font-medium group-hover:text-gray-900 transition-colors">Remember me</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                                    Forgot password?
                                </a>
                            @endif
                        </div>

                        <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-[#435EE3] to-[#7E42FA] hover:opacity-95 text-white font-semibold rounded-xl shadow-md transition-all duration-200 flex items-center justify-center gap-2 group">
                            Log In To Dashboard
                            <i class="fas fa-arrow-right text-xs transform group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </form>

                    <!-- Trust Badge -->
                    <div class="mt-6 bg-slate-50 border border-slate-100 rounded-xl p-4 flex items-start gap-3">
                        <i class="fas fa-shield-check text-blue-600 mt-0.5"></i>
                        <div>
                            <h5 class="text-sm font-semibold text-gray-900">Your data is safe with us.</h5>
                            <p class="text-xs text-gray-500 mt-0.5">We use industry-standard security to protect your information.</p>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        
        <!-- Footer -->
        <div class="mt-auto pt-8 flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-6 text-xs text-gray-400 border-t border-gray-100 mt-8 relative z-10">
            <span>© 2024 Skillstryx. All rights reserved.</span>
            <span class="hidden sm:inline">|</span>
            <div class="flex gap-4">
                <a href="#" class="hover:text-gray-600 transition">Privacy Policy</a>
                <a href="#" class="hover:text-gray-600 transition">Terms of Service</a>
            </div>
        </div>

    </div>
</x-guest-layout>
