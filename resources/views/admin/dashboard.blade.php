@extends('layouts.admin')

@section('header', 'Dashboard Overview')

@section('content')
<!-- Stats Overview -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <!-- Stat Card 1 -->
    <div class="bg-white/80 backdrop-blur-xl rounded-3xl p-1 relative overflow-hidden group hover:scale-[1.02] transition-transform duration-300 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="bg-white rounded-[1.35rem] p-6 h-full border border-slate-100/50 shadow-sm relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white shadow-lg shadow-blue-500/30 transform group-hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <span class="flex items-center gap-1 text-xs font-bold text-teal-600 bg-teal-50 px-2.5 py-1 rounded-full border border-teal-100">
                    <i class="fas fa-arrow-up"></i> 12%
                </span>
            </div>
            <p class="text-sm font-bold text-slate-400 mb-1 tracking-wider uppercase">Total Students</p>
            <h3 class="text-4xl font-black text-slate-800 tracking-tight">{{ $totalStudents }}</h3>
        </div>
    </div>
    
    <!-- Stat Card 2 -->
    <div class="bg-white/80 backdrop-blur-xl rounded-3xl p-1 relative overflow-hidden group hover:scale-[1.02] transition-transform duration-300 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="bg-white rounded-[1.35rem] p-6 h-full border border-slate-100/50 shadow-sm relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 flex items-center justify-center text-white shadow-lg shadow-purple-500/30 transform group-hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-book-open text-xl"></i>
                </div>
                <span class="flex items-center gap-1 text-xs font-bold text-teal-600 bg-teal-50 px-2.5 py-1 rounded-full border border-teal-100">
                    <i class="fas fa-arrow-up"></i> 4%
                </span>
            </div>
            <p class="text-sm font-bold text-slate-400 mb-1 tracking-wider uppercase">Total Courses</p>
            <h3 class="text-4xl font-black text-slate-800 tracking-tight">{{ $totalCourses }}</h3>
        </div>
    </div>

    <!-- Stat Card 3 -->
    <div class="bg-white/80 backdrop-blur-xl rounded-3xl p-1 relative overflow-hidden group hover:scale-[1.02] transition-transform duration-300 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-teal-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="bg-white rounded-[1.35rem] p-6 h-full border border-slate-100/50 shadow-sm relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-400 to-teal-600 flex items-center justify-center text-white shadow-lg shadow-emerald-500/30 transform group-hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-wallet text-xl"></i>
                </div>
                <span class="flex items-center gap-1 text-xs font-bold text-rose-600 bg-rose-50 px-2.5 py-1 rounded-full border border-rose-100">
                    <i class="fas fa-arrow-down"></i> 2%
                </span>
            </div>
            <p class="text-sm font-bold text-slate-400 mb-1 tracking-wider uppercase">Total Revenue</p>
            <h3 class="text-4xl font-black text-slate-800 tracking-tight">$12,450</h3>
        </div>
    </div>

    <!-- Stat Card 4 -->
    <div class="bg-white/80 backdrop-blur-xl rounded-3xl p-1 relative overflow-hidden group hover:scale-[1.02] transition-transform duration-300 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-rose-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="bg-white rounded-[1.35rem] p-6 h-full border border-slate-100/50 shadow-sm relative z-10">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-400 to-rose-500 flex items-center justify-center text-white shadow-lg shadow-orange-500/30 transform group-hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-bolt text-xl"></i>
                </div>
                <span class="flex items-center gap-1 text-xs font-bold text-teal-600 bg-teal-50 px-2.5 py-1 rounded-full border border-teal-100">
                    <i class="fas fa-arrow-up"></i> 18%
                </span>
            </div>
            <p class="text-sm font-bold text-slate-400 mb-1 tracking-wider uppercase">Active Sessions</p>
            <h3 class="text-4xl font-black text-slate-800 tracking-tight">84</h3>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Table Area -->
    <div class="lg:col-span-2 space-y-8">
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white p-2">
            <div class="bg-white rounded-[1.35rem] overflow-hidden">
                <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between bg-white/50">
                    <div>
                        <h3 class="text-lg font-extrabold text-slate-800 tracking-tight">Recently Registered</h3>
                        <p class="text-sm text-slate-500 mt-1">Latest students to join the academy.</p>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="px-4 py-2 bg-indigo-50 text-indigo-600 font-bold text-sm rounded-xl hover:bg-indigo-600 hover:text-white transition-all shadow-sm">View All</a>
                </div>
                <div class="p-0 overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-max">
                        <thead>
                            <tr class="bg-slate-50/50 text-slate-400 text-xs font-bold uppercase tracking-widest border-b border-slate-100">
                                <th class="px-8 py-5">Student Info</th>
                                <th class="px-8 py-5">Registered Date</th>
                                <th class="px-8 py-5 text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50 text-sm">
                            @forelse($recentStudents as $student)
                            <tr class="hover:bg-slate-50/80 transition-colors group">
                                <td class="px-8 py-5">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-slate-100 to-slate-200 text-slate-600 flex items-center justify-center font-bold text-lg border border-white shadow-sm shrink-0 group-hover:shadow-md transition-shadow">
                                            {{ substr($student->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <p class="font-bold text-slate-800 text-base mb-0.5">{{ $student->name }}</p>
                                            <p class="text-xs text-slate-500 font-medium">{{ $student->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-5">
                                    <p class="font-bold text-slate-700 mb-0.5">{{ $student->created_at->format('d M Y') }}</p>
                                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider">{{ $student->created_at->format('h:i A') }}</p>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <span class="inline-flex px-3 py-1.5 rounded-lg bg-teal-50 text-teal-700 text-xs font-bold border border-teal-100 shadow-sm">
                                        Active
                                    </span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-8 py-16 text-center">
                                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-3xl bg-slate-50 mb-4 text-slate-300 shadow-inner">
                                        <i class="fas fa-user-slash text-2xl"></i>
                                    </div>
                                    <h4 class="text-lg font-bold text-slate-700 mb-1">No students yet</h4>
                                    <p class="text-slate-500 font-medium text-sm">Wait for students to register or add them manually.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sidebar Area (Activity/Quick Actions) -->
    <div class="space-y-8">
        <!-- Quick Actions -->
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white p-2">
            <div class="bg-white rounded-[1.35rem] p-7">
                <h3 class="text-lg font-extrabold text-slate-800 mb-6 tracking-tight">Quick Actions</h3>
                <div class="space-y-4">
                    <a href="{{ route('admin.courses.index') }}" class="flex items-center gap-5 p-4 rounded-2xl border border-slate-100 hover:border-blue-200 hover:bg-gradient-to-r hover:from-blue-50/50 hover:to-transparent transition-all group cursor-pointer hover:shadow-md hover:shadow-blue-500/5">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:shadow-blue-500/30 group-hover:-translate-y-0.5">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-800 group-hover:text-blue-700 transition-colors">Add New Course</p>
                            <p class="text-xs text-slate-500 mt-1 font-medium">Create a learning program</p>
                        </div>
                    </a>
                    
                    <a href="{{ route('admin.users.index') }}" class="flex items-center gap-5 p-4 rounded-2xl border border-slate-100 hover:border-purple-200 hover:bg-gradient-to-r hover:from-purple-50/50 hover:to-transparent transition-all group cursor-pointer hover:shadow-md hover:shadow-purple-500/5">
                        <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:shadow-purple-500/30 group-hover:-translate-y-0.5">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-800 group-hover:text-purple-700 transition-colors">Register Student</p>
                            <p class="text-xs text-slate-500 mt-1 font-medium">Manually enroll someone</p>
                        </div>
                    </a>
                    
                    <a href="#" class="flex items-center gap-5 p-4 rounded-2xl border border-slate-100 hover:border-orange-200 hover:bg-gradient-to-r hover:from-orange-50/50 hover:to-transparent transition-all group cursor-pointer hover:shadow-md hover:shadow-orange-500/5">
                        <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:shadow-orange-500/30 group-hover:-translate-y-0.5">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-800 group-hover:text-orange-700 transition-colors">Post Announcement</p>
                            <p class="text-xs text-slate-500 mt-1 font-medium">Notify enrolled students</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white p-2">
            <div class="bg-white rounded-[1.35rem] p-7">
                <h3 class="text-lg font-extrabold text-slate-800 mb-8 tracking-tight">Recent Activity</h3>
                <div class="relative pl-6 space-y-8">
                    <!-- Vertical Line -->
                    <div class="absolute left-[11px] top-2 bottom-2 w-[2px] bg-gradient-to-b from-indigo-200 via-purple-200 to-transparent"></div>
                    
                    <div class="relative">
                        <div class="absolute -left-[31px] top-1 w-4 h-4 rounded-full bg-indigo-500 border-4 border-white box-content shadow-sm shadow-indigo-500/40"></div>
                        <p class="text-sm font-bold text-slate-800 mb-1">New enrollment</p>
                        <p class="text-xs text-slate-500 font-medium">Jane Doe enrolled in Web Dev Bootcamp.</p>
                        <p class="text-[10px] text-indigo-400 font-bold mt-2 uppercase tracking-widest">2 hrs ago</p>
                    </div>
                    <div class="relative">
                        <div class="absolute -left-[31px] top-1 w-4 h-4 rounded-full bg-emerald-500 border-4 border-white box-content shadow-sm shadow-emerald-500/40"></div>
                        <p class="text-sm font-bold text-slate-800 mb-1">Course completed</p>
                        <p class="text-xs text-slate-500 font-medium">Mark Smith finished UI/UX Masterclass.</p>
                        <p class="text-[10px] text-emerald-400 font-bold mt-2 uppercase tracking-widest">5 hrs ago</p>
                    </div>
                    <div class="relative">
                        <div class="absolute -left-[31px] top-1 w-4 h-4 rounded-full bg-slate-300 border-4 border-white box-content shadow-sm"></div>
                        <p class="text-sm font-bold text-slate-800 mb-1">System Update</p>
                        <p class="text-xs text-slate-500 font-medium">Platform maintenance completed successfully.</p>
                        <p class="text-[10px] text-slate-400 font-bold mt-2 uppercase tracking-widest">1 day ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
