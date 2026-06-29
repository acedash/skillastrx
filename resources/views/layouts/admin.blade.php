<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard - Skillstryx Academy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .mesh-bg {
            background-color: #f8fafc;
            background-image: radial-gradient(at 40% 20%, hsla(228,100%,74%,0.15) 0px, transparent 50%),
                              radial-gradient(at 80% 0%, hsla(189,100%,56%,0.15) 0px, transparent 50%),
                              radial-gradient(at 0% 50%, hsla(355,100%,93%,0.1) 0px, transparent 50%);
        }
    </style>
</head>
<body class="font-sans antialiased bg-slate-50 flex h-screen overflow-hidden text-sm selection:bg-indigo-500/30">
    
    <!-- Dark Sidebar -->
    <aside class="w-[280px] bg-[#0f172a] text-slate-300 flex flex-col h-full shadow-[4px_0_24px_rgba(0,0,0,0.1)] border-r border-slate-800/50 z-30 transition-all duration-300 relative">
        <!-- Sidebar Glow -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl"></div>
        </div>

        <!-- Logo Area -->
        <div class="flex items-center justify-center h-24 px-6 relative z-10">
            <div class="bg-white/95 backdrop-blur-sm p-3 rounded-2xl shadow-[0_0_20px_rgba(255,255,255,0.05)] border border-white/10">
                <img src="{{ asset('images/logo-new.jpeg') }}" alt="Skillstryx Academy" class="h-8 object-contain mix-blend-multiply">
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto py-6 space-y-2 px-5 scrollbar-hide relative z-10">
            <p class="px-4 text-[10px] font-bold tracking-wider text-slate-500 uppercase mb-4 mt-2">Main Menu</p>
            
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-indigo-500/15 text-indigo-400 shadow-[inset_3px_0_0_0_rgb(99,102,241)]' : 'hover:bg-slate-800/50 hover:text-slate-100' }} flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group">
                <i class="fas fa-layer-group w-5 text-center text-lg {{ request()->routeIs('admin.dashboard') ? 'text-indigo-400 drop-shadow-[0_0_8px_rgba(99,102,241,0.5)]' : 'text-slate-500 group-hover:text-slate-300 transition-colors' }}"></i>
                <span class="font-medium tracking-wide">Overview</span>
            </a>
            
            <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'bg-indigo-500/15 text-indigo-400 shadow-[inset_3px_0_0_0_rgb(99,102,241)]' : 'hover:bg-slate-800/50 hover:text-slate-100' }} flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group">
                <i class="fas fa-user-graduate w-5 text-center text-lg {{ request()->routeIs('admin.users.*') ? 'text-indigo-400 drop-shadow-[0_0_8px_rgba(99,102,241,0.5)]' : 'text-slate-500 group-hover:text-slate-300 transition-colors' }}"></i>
                <span class="font-medium tracking-wide">Students</span>
            </a>
            
            <a href="{{ route('admin.courses.index') }}" class="{{ request()->routeIs('admin.courses.*') ? 'bg-indigo-500/15 text-indigo-400 shadow-[inset_3px_0_0_0_rgb(99,102,241)]' : 'hover:bg-slate-800/50 hover:text-slate-100' }} flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group">
                <i class="fas fa-book-open w-5 text-center text-lg {{ request()->routeIs('admin.courses.*') ? 'text-indigo-400 drop-shadow-[0_0_8px_rgba(99,102,241,0.5)]' : 'text-slate-500 group-hover:text-slate-300 transition-colors' }}"></i>
                <span class="font-medium tracking-wide">Courses</span>
            </a>
            
            <a href="{{ route('admin.enrollments.index') }}" class="{{ request()->routeIs('admin.enrollments.*') ? 'bg-indigo-500/15 text-indigo-400 shadow-[inset_3px_0_0_0_rgb(99,102,241)]' : 'hover:bg-slate-800/50 hover:text-slate-100' }} flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group">
                <i class="fas fa-laptop-code w-5 text-center text-lg {{ request()->routeIs('admin.enrollments.*') ? 'text-indigo-400 drop-shadow-[0_0_8px_rgba(99,102,241,0.5)]' : 'text-slate-500 group-hover:text-slate-300 transition-colors' }}"></i>
                <span class="font-medium tracking-wide">Enrollments</span>
            </a>

            <p class="px-4 text-[10px] font-bold tracking-wider text-slate-500 uppercase mb-4 mt-8">Manage</p>
            
            <a href="#" class="hover:bg-slate-800/50 hover:text-slate-100 text-slate-400 flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group">
                <i class="fas fa-credit-card w-5 text-center text-lg text-slate-500 group-hover:text-slate-300 transition-colors"></i>
                <span class="font-medium tracking-wide">Payments</span>
            </a>
            
            <a href="#" class="hover:bg-slate-800/50 hover:text-slate-100 text-slate-400 flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group">
                <i class="fas fa-chart-pie w-5 text-center text-lg text-slate-500 group-hover:text-slate-300 transition-colors"></i>
                <span class="font-medium tracking-wide">Analytics</span>
            </a>
            
            <a href="#" class="hover:bg-slate-800/50 hover:text-slate-100 text-slate-400 flex items-center gap-3.5 px-4 py-3.5 rounded-xl transition-all duration-300 group mt-4">
                <i class="fas fa-sliders-h w-5 text-center text-lg text-slate-500 group-hover:text-slate-300 transition-colors"></i>
                <span class="font-medium tracking-wide">Settings</span>
            </a>
        </nav>
        
        <!-- User / Logout Area -->
        <div class="p-5 border-t border-slate-800/50 relative z-10 bg-slate-900/50 backdrop-blur-xl">
            <div class="flex items-center gap-3 mb-4 px-2">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold shadow-lg shadow-indigo-500/20 ring-2 ring-slate-800">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="text-sm font-semibold text-slate-200 truncate">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-slate-500 truncate">Administrator</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center justify-center gap-2 w-full py-2.5 bg-slate-800 hover:bg-red-500/10 hover:text-red-400 hover:border-red-500/20 text-slate-400 border border-slate-700/50 rounded-lg transition-all duration-300 group">
                    <i class="fas fa-sign-out-alt text-sm group-hover:text-red-400"></i>
                    <span class="font-semibold text-xs tracking-wide">SIGN OUT</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col h-full relative z-10 overflow-hidden mesh-bg">
        
        <!-- Floating Top Header -->
        <div class="px-6 lg:px-10 pt-6 pb-2 shrink-0 z-40">
            <header class="h-[76px] bg-white/70 backdrop-blur-xl border border-white/60 flex items-center justify-between px-6 lg:px-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] rounded-2xl transition-all">
                
                <div class="flex items-center gap-4 flex-1">
                    <button class="text-slate-400 hover:text-indigo-600 transition md:hidden bg-white p-2 rounded-lg shadow-sm border border-slate-100">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>

                <div class="flex items-center justify-end gap-5 sm:gap-6 flex-1">
                    <!-- Global Search -->
                    <div class="relative hidden lg:block w-80 group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-indigo-500 transition-colors">
                            <i class="fas fa-search"></i>
                        </div>
                        <input type="text" class="w-full pl-11 pr-4 py-2.5 bg-white/50 border border-slate-200/60 text-slate-700 text-sm rounded-xl focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder-slate-400 focus:bg-white shadow-sm" placeholder="Quick search...">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <span class="text-[10px] font-bold text-slate-400 border border-slate-200 px-1.5 py-0.5 rounded bg-white">⌘K</span>
                        </div>
                    </div>

                    <div class="h-8 w-px bg-slate-200/60 hidden sm:block"></div>

                    <!-- Notifications -->
                    <button class="relative w-10 h-10 rounded-xl bg-white border border-slate-200/60 text-slate-500 hover:text-indigo-600 hover:border-indigo-200 hover:shadow-md hover:shadow-indigo-500/10 transition-all flex items-center justify-center">
                        <i class="far fa-bell text-lg"></i>
                        <span class="absolute top-2 right-2 block h-2.5 w-2.5 rounded-full bg-rose-500 border-2 border-white box-content"></span>
                    </button>
                </div>
            </header>
        </div>

        <!-- Page Content Scroll Area -->
        <main class="flex-1 overflow-y-auto pb-10">
            <div class="px-6 lg:px-10 py-4 max-w-[1600px] mx-auto w-full">
                
                <!-- Page Header Area -->
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8 mt-2">
                    <div>
                        <div class="flex items-center text-xs font-semibold tracking-wider text-indigo-600/80 mb-2 uppercase">
                            <a href="{{ route('admin.dashboard') }}" class="hover:text-indigo-600 transition">Dashboard</a>
                            <i class="fas fa-angle-right text-[10px] mx-2 text-slate-300"></i>
                            <span class="text-slate-500">@yield('header')</span>
                        </div>
                        <h2 class="text-3xl font-black text-slate-800 tracking-tight">
                            @yield('header')
                        </h2>
                    </div>
                    
                    @hasSection('header_actions')
                        <div class="flex items-center gap-3">
                            @yield('header_actions')
                        </div>
                    @endif
                </div>

                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="mb-8 p-4 rounded-2xl bg-teal-50/80 backdrop-blur-sm border border-teal-200/60 text-teal-800 flex items-center gap-3 shadow-[0_4px_12px_rgba(20,184,166,0.08)]">
                        <div class="w-8 h-8 rounded-full bg-teal-100 flex items-center justify-center shrink-0">
                            <i class="fas fa-check text-teal-600"></i>
                        </div>
                        <p class="font-medium text-sm">{{ session('success') }}</p>
                    </div>
                @endif
                @if(session('error'))
                    <div class="mb-8 p-4 rounded-2xl bg-rose-50/80 backdrop-blur-sm border border-rose-200/60 text-rose-800 flex items-center gap-3 shadow-[0_4px_12px_rgba(244,63,94,0.08)]">
                        <div class="w-8 h-8 rounded-full bg-rose-100 flex items-center justify-center shrink-0">
                            <i class="fas fa-exclamation text-rose-600"></i>
                        </div>
                        <p class="font-medium text-sm">{{ session('error') }}</p>
                    </div>
                @endif

                <!-- Dynamic Page Content -->
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
