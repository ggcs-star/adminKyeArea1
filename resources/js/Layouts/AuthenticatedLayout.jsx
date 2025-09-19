import ApplicationLogo from '@/Components/ApplicationLogo';
import NavLink from '@/Components/NavLink';
import { Link, usePage } from '@inertiajs/react';
import { useState, useEffect } from 'react';
import { motion, AnimatePresence } from "framer-motion";

// Lucide icons
import {
    Home, Building2, Users, FileText, CreditCard, HelpCircle, BarChart,
    ChevronDown, LogOut, User, Settings, Bell, Search, ChevronRight
} from "lucide-react";

export default function AuthenticatedLayout({ header, children }) {
    const user = usePage().props.auth.user;

    const currentRoute = route().current();
    const isReportsRoute = currentRoute?.startsWith('reports.');
    const [reportsDropdownOpen, setReportsDropdownOpen] = useState(isReportsRoute);
    const [userDropdownOpen, setUserDropdownOpen] = useState(false);
    const [sidebarOpen, setSidebarOpen] = useState(true);
    const [notificationsOpen, setNotificationsOpen] = useState(false);

    useEffect(() => {
        if (isReportsRoute) {
            setReportsDropdownOpen(true);
        }
    }, [isReportsRoute]);

    return (
        <div className="flex min-h-screen bg-gray-50 text-gray-900">
            {/* Sidebar */}
            <aside className={`fixed inset-y-0 left-0 z-30 bg-gradient-to-b from-indigo-800 to-indigo-900 text-white flex flex-col shadow-xl transition-all duration-300 ${sidebarOpen ? 'w-64' : 'w-20'}`}>
                {/* Logo */}
                <div className="flex items-center justify-between h-16 border-b border-indigo-700 px-4">
                    {sidebarOpen ? (
                        <Link href="/" className="flex items-center gap-2">
                            <ApplicationLogo className="h-10 w-auto text-white" />
                            <span className="font-bold text-lg text-white">MyApp</span>
                        </Link>
                    ) : (
                        <Link href="/" className="flex justify-center w-full">
                            <ApplicationLogo className="h-8 w-auto text-white" />
                        </Link>
                    )}
                    <button
                        onClick={() => setSidebarOpen(!sidebarOpen)}
                        className="p-1 rounded-md hover:bg-indigo-700 transition-colors"
                    >
                        <ChevronRight className={`h-4 w-4 transition-transform ${sidebarOpen ? 'rotate-180' : ''}`} />
                    </button>
                </div>

                {/* Navigation Links */}
                <nav className="flex-1 flex flex-col overflow-y-auto mt-4 px-3 space-y-1">
                    <Link
                        href={route('dashboard')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('dashboard') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Home className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">Dashboard</span>}
                    </Link>

                     <Link
                        href={route('projects.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('projects.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Users className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">projects</span>}
                    </Link>
         
                    <Link
                        href={route('builder.create')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('builder.create') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Building2 className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">Builder</span>}
                    </Link>

                    <Link
                        href={route('configurations.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('configurations.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <Users className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">Configurations</span>}
                    </Link>

                    <Link
                        href={route('leads.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('leads.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <FileText className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">Leads</span>}
                    </Link>

                    {/* <Link
                        href={route('payments.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('payments.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <CreditCard className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">Payments</span>}
                    </Link>

                    <Link
                        href={route('followups.index')}
                        className={`flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 ${route().current('followups.index') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                    >
                        <FileText className="w-5 h-5" />
                        {sidebarOpen && <span className="font-medium">Follow-Ups</span>}
                    </Link> */}

                    {/* Reports Dropdown */}
                    {/* {sidebarOpen && (
                        <div className="relative">
                            <button
                                onClick={() => setReportsDropdownOpen(prev => !prev)}
                                className={`flex items-center justify-between w-full px-4 py-3 rounded-xl transition-all duration-200 ${isReportsRoute ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                            >
                                <div className="flex items-center gap-3">
                                    <BarChart className="w-5 h-5" />
                                    <span className="font-medium">Reports</span>
                                </div>
                                <ChevronDown
                                    className={`h-4 w-4 transition-transform ${reportsDropdownOpen ? "rotate-180" : ""}`}
                                />
                            </button>

                            <AnimatePresence>
                                {reportsDropdownOpen && (
                                    <motion.div
                                        initial={{ opacity: 0, height: 0 }}
                                        animate={{ opacity: 1, height: 'auto' }}
                                        exit={{ opacity: 0, height: 0 }}
                                        transition={{ duration: 0.2 }}
                                        className="ml-6 mt-1 flex flex-col gap-1 overflow-hidden"
                                    >
                                        <Link
                                            href={route('reports.clients')}
                                            className={`flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 ${route().current('reports.clients') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                                        >
                                            <Users className="w-4 h-4" />
                                            <span className="font-medium">Client Reports</span>
                                        </Link>
                                        <Link
                                            href={route('reports.invoices')}
                                            className={`flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 ${route().current('reports.invoices') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                                        >
                                            <FileText className="w-4 h-4" />
                                            <span className="font-medium">Invoice Reports</span>
                                        </Link>
                                        <Link
                                            href={route('reports.followups')}
                                            className={`flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 ${route().current('reports.followups') ? 'bg-indigo-700 shadow-md' : 'hover:bg-indigo-700'}`}
                                        >
                                            <FileText className="w-4 h-4" />
                                            <span className="font-medium">Followups Reports</span>
                                        </Link>
                                    </motion.div>
                                )}
                            </AnimatePresence>
                        </div>
                    )} */}
                </nav>

                {/* Help Button */}
                <div className="p-4 mt-auto">
                    <button className="w-full bg-indigo-600 text-white px-4 py-3 rounded-xl shadow-md hover:bg-indigo-500 transition-all duration-300 flex items-center justify-center gap-2">
                        <HelpCircle className="w-5 h-5" />
                        {sidebarOpen && <span>Need Help?</span>}
                    </button>
                </div>
            </aside>

            {/* Main content */}
            <div className={`flex-1 flex flex-col min-h-screen transition-all duration-300 ${sidebarOpen ? 'ml-64' : 'ml-20'}`}>
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
                                    <ChevronDown
                                        className={`h-4 w-4 transition-transform ${userDropdownOpen ? "rotate-180" : ""}`}
                                    />
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