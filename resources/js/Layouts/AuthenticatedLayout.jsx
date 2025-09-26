import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link, usePage } from '@inertiajs/react';
import { useState } from 'react';
import { motion, AnimatePresence } from "framer-motion";

import {
    Home, Building2, Users, FileText, CreditCard, HelpCircle, BarChart,
    LogOut, User, Settings, Bell, MapPin, Car, ListChecks, LayoutDashboard
} from "lucide-react";

export default function AuthenticatedLayout({ header, children }) {
    const user = usePage().props.auth.user;
    const currentRoute = route().current();
    const [notificationsOpen, setNotificationsOpen] = useState(false);
    const [userDropdownOpen, setUserDropdownOpen] = useState(false);

    return (
        <div className="flex min-h-screen bg-gray-50 text-gray-900">
            {/* Sidebar */}
            <aside className="fixed inset-y-0 left-0 z-30 w-64 bg-gradient-to-b from-indigo-800 to-indigo-900 text-white flex flex-col shadow-xl">
                {/* Logo */}
                <div className="flex items-center justify-center h-16 border-b border-indigo-700 px-4">
                    <Link href="/dashboard" className="flex items-center gap-2">
                        <ApplicationLogo className="h-10 w-auto text-white" />
                    </Link>
                </div>

                {/* Navigation Links */}
                <nav className="flex-1 flex flex-col overflow-y-auto mt-4 px-3 space-y-1">
                    <Link
                        href={route('dashboard')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('dashboard') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <LayoutDashboard className="w-5 h-5" />
                        <span className="font-medium">Dashboard</span>
                    </Link>

                    <Link
                        href={route('projects.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('projects.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Building2 className="w-5 h-5" />
                        <span className="font-medium">Projects</span>
                    </Link>

                    <Link
                        href={route('builder.create')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('builder.create') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Users className="w-5 h-5" />
                        <span className="font-medium">Builder</span>
                    </Link>

                    <Link
                        href={route('configurations.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('configurations.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <ListChecks className="w-5 h-5" />
                        <span className="font-medium">Configurations</span>
                    </Link>

                    <Link
                        href={route('leads.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('leads.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <FileText className="w-5 h-5" />
                        <span className="font-medium">Leads</span>
                    </Link>

                    <Link
                        href={route('specifications.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('specifications.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <CreditCard className="w-5 h-5" />
                        <span className="font-medium">Specifications</span>
                    </Link>

                    <Link
                        href={route('building.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('building.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Building2 className="w-5 h-5" />
                        <span className="font-medium">Building</span>
                    </Link>

                    <Link
                        href={route('parking.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('parking.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Car className="w-5 h-5" />
                        <span className="font-medium">Parking</span>
                    </Link>

                    <Link
                        href={route('amenities.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('amenities.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <HelpCircle className="w-5 h-5" />
                        <span className="font-medium">Amenities</span>
                    </Link>

                    <Link
                        href={route('modern-features.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('modern-features.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <BarChart className="w-5 h-5" />
                        <span className="font-medium">Modern Features</span>
                    </Link>

                    <Link
                        href={route('lifestyles.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('lifestyles.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Users className="w-5 h-5" />
                        <span className="font-medium">Lifestyles</span>
                    </Link>

                    <Link
                        href={route('localityData.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('localityData.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <MapPin className="w-5 h-5" />
                        <span className="font-medium">Locality Data</span>
                    </Link>
                </nav>

               
            </aside>

            {/* Main content */}
            <div className="flex-1 flex flex-col min-h-screen ml-64 transition-all duration-300">
                {/* Header */}
                <header className="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-10">
                    <div className="flex justify-between items-center px-8 py-4">
                        <h1 className="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent ">
                            {header}
                        </h1>

                        <div className="flex items-center gap-6">
                            {/* Notifications */}
                            <div className="relative">
                                <button
                                    onClick={() => setNotificationsOpen(!notificationsOpen)}
                                    className="p-2 rounded-full hover:bg-gray-100 transition duration-200 relative"
                                >
                                    <Bell className="h-5 w-5 text-gray-600" />
                                    <span className="absolute top-0 right-0 h-3 w-3 bg-red-500 rounded-full border-2 border-white"></span>
                                </button>

                                <AnimatePresence>
                                    {notificationsOpen && (
                                        <motion.div
                                            initial={{ opacity: 0, y: -10 }}
                                            animate={{ opacity: 1, y: 0 }}
                                            exit={{ opacity: 0, y: -10 }}
                                            transition={{ duration: 0.2 }}
                                            className="absolute right-0 mt-2 w-80 bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden z-50"
                                        >
                                            <div className="p-4 border-b border-gray-200">
                                                <h3 className="font-semibold text-gray-800">Notifications</h3>
                                            </div>
                                            <div className="max-h-96 overflow-y-auto">
                                                <div className="p-4 border-b border-gray-100 hover:bg-gray-50 cursor-pointer">
                                                    <p className="text-sm font-medium">New invoice received</p>
                                                    <p className="text-xs text-gray-500 mt-1">2 minutes ago</p>
                                                </div>
                                                <div className="p-4 border-b border-gray-100 hover:bg-gray-50 cursor-pointer">
                                                    <p className="text-sm font-medium">Payment processed successfully</p>
                                                    <p className="text-xs text-gray-500 mt-1">1 hour ago</p>
                                                </div>
                                                <div className="p-4 hover:bg-gray-50 cursor-pointer">
                                                    <p className="text-sm font-medium">System update completed</p>
                                                    <p className="text-xs text-gray-500 mt-1">Yesterday</p>
                                                </div>
                                            </div>
                                            <div className="p-3 bg-gray-50 text-center">
                                                <button className="text-sm text-blue-600 font-medium hover:text-blue-800">
                                                    View all notifications
                                                </button>
                                            </div>
                                        </motion.div>
                                    )}
                                </AnimatePresence>
                            </div>

                            {/* User dropdown */}
                            <div className="relative">
                                <button
                                    onClick={() => setUserDropdownOpen(!userDropdownOpen)}
                                    className="flex items-center gap-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-full pl-2 pr-3 py-1 hover:bg-gray-200 transition duration-200"
                                >
                                    <div className="h-8 w-8 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold">
                                        {user?.name?.charAt(0) || 'U'}
                                    </div>
                                    <span>{user.name}</span>
                                </button>

                                <AnimatePresence>
                                    {userDropdownOpen && (
                                        <motion.div
                                            initial={{ opacity: 0, y: -10 }}
                                            animate={{ opacity: 1, y: 0 }}
                                            exit={{ opacity: 0, y: -10 }}
                                            transition={{ duration: 0.2 }}
                                            className="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden z-50"
                                        >
                                            <div className="p-2">
                                                <div className="px-3 py-2 text-sm text-gray-700 font-medium border-b border-gray-100">
                                                    {user.name}
                                                </div>
                                                <div className="flex flex-col">
                                                    <Link
                                                        href={route('profile.edit')}
                                                        className="flex items-center gap-2 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200"
                                                    >
                                                        <User className="h-4 w-4" />
                                                        Profile
                                                    </Link>
                                                    <button className="flex items-center gap-2 px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200">
                                                        <Settings className="h-4 w-4" />
                                                        Settings
                                                    </button>
                                                </div>
                                            </div>
                                            <div className="p-2 border-t border-gray-100">
                                                <Link
                                                    href={route('logout')}
                                                    method="post"
                                                    as="button"
                                                    className="flex items-center gap-2 w-full px-3 py-2 text-sm text-red-600 hover:bg-red-50 rounded-lg transition duration-200"
                                                >
                                                    <LogOut className="h-4 w-4" />
                                                    Log Out
                                                </Link>
                                            </div>
                                        </motion.div>
                                    )}
                                </AnimatePresence>
                            </div>
                        </div>
                    </div>
                </header>

                {/* Main content area */}
                <main className="flex-1 bg-gray-50 text-gray-900 p-8">
                    <div className="max-w-7xl mx-auto">
                        {children}
                    </div>
                </main>
            </div>
        </div>
    );
}
