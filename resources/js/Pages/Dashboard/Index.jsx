// resources/js/Pages/Admin/Dashboard.jsx
import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    BarElement,
    ArcElement,
    Title,
    Tooltip,
    Legend,
} from 'chart.js';
import { Bar, Doughnut } from 'react-chartjs-2';

ChartJS.register(
    CategoryScale,
    LinearScale,
    BarElement,
    ArcElement,
    Title,
    Tooltip,
    Legend
);

export default function Dashboard({ 
    metrics, 
    recentProjects, 
    statusDistribution,
    configSummary 
}) {
    // Status Chart Data
    const statusChartData = {
        labels: statusDistribution?.map(item => {
            // Convert status to readable format
            const statusMap = {
                'active': 'Active',
                'inactive': 'Inactive', 
                'pending': 'Pending',
                'completed': 'Completed',
                'upcoming': 'Upcoming'
            };
            return statusMap[item.status] || item.status;
        }) || [],
        datasets: [
            {
                data: statusDistribution?.map(item => item.count) || [],
                backgroundColor: [
                    '#10B981', // green → active
                    '#EF4444', // red → inactive
                    '#F59E0B', // amber → pending
                    '#3B82F6', // blue → completed
                    '#8B5CF6', // purple → upcoming
                ],
                borderWidth: 2,
                borderColor: '#FFFFFF',
            },
        ],
    };

    // Configuration Chart Data
    const processConfigSummary = () => {
        if (!configSummary || !Array.isArray(configSummary)) {
            return { labels: [], datasets: [] };
        }

        const labels = configSummary.map(item => {
            // Convert configuration types to readable format
            const configMap = {
                '1bhk': '1 BHK',
                '2bhk': '2 BHK',
                '3bhk': '3 BHK',
                '4bhk': '4 BHK',
                'villa': 'Villa',
                'penthouse': 'Penthouse',
                'studio': 'Studio'
            };
            return configMap[item.type] || item.type;
        });
        
        const data = configSummary.map(item => item.count);

        return {
            labels,
            datasets: [
                {
                    data,
                    backgroundColor: [
                        '#3B82F6', // Blue - 1 BHK
                        '#10B981', // Green - 2 BHK
                        '#F59E0B', // Amber - 3 BHK
                        '#EF4444', // Red - 4 BHK
                        '#8B5CF6', // Purple - Villa
                        '#06B6D4', // Cyan - Penthouse
                        '#EC4899', // Pink - Studio
                    ],
                    borderWidth: 2,
                    borderColor: '#FFFFFF',
                },
            ],
        };
    };

    const configChartData = processConfigSummary();

    // Chart options
    const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    padding: 20,
                    font: {
                        size: 11
                    }
                }
            },
        },
        cutout: '60%',
    };

    // Get status badge color
    const getStatusBadge = (status) => {
        const statusColors = {
            'active': 'bg-green-100 text-green-800 border-green-200',
            'inactive': 'bg-red-100 text-red-800 border-red-200',
            'pending': 'bg-yellow-100 text-yellow-800 border-yellow-200',
            'completed': 'bg-blue-100 text-blue-800 border-blue-200',
            'upcoming': 'bg-purple-100 text-purple-800 border-purple-200'
        };
        return statusColors[status] || 'bg-gray-100 text-gray-800 border-gray-200';
    };

    return (
        <AuthenticatedLayout>
            <Head title="Real Estate Dashboard" />

            <div className="min-h-screen bg-gray-50 py-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    {/* Header */}
                    <div className="mb-8">
                        <div className="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-4">
                            <div>
                                <h1 className="text-3xl font-bold text-gray-900 font-serif">Property Dashboard</h1>
                                <p className="mt-2 text-lg text-gray-600">
                                    Overview of your real estate portfolio and performance
                                </p>
                            </div>
                            <div className="flex flex-wrap gap-3">
                                <Link
                                    href={route('admin.analytics')}
                                    className="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-purple-700 hover:to-purple-800 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all duration-200 shadow-lg hover:shadow-xl"
                                >
                                    <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    View Analytics
                                </Link>
                            </div>
                        </div>
                    </div>

                    {/* Metrics Grid */}
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        {/* Total Projects */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Total Properties</p>
                                    <p className="text-3xl font-bold text-gray-900 mt-1">{metrics?.total_projects || 0}</p>
                                    <p className="text-xs text-gray-500 mt-1">Portfolio Size</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-blue-600">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    All properties in system
                                </div>
                            </div>
                        </div>

                        {/* Active Projects */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-green-500 to-green-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Active Listings</p>
                                    <p className="text-3xl font-bold text-gray-900 mt-1">{metrics?.active_projects || 0}</p>
                                    <p className="text-xs text-gray-500 mt-1">Currently available</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-green-600">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                                    </svg>
                                    Ready for sale
                                </div>
                            </div>
                        </div>

                        {/* Featured Projects */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Featured</p>
                                    <p className="text-3xl font-bold text-gray-900 mt-1">{metrics?.featured_projects || 0}</p>
                                    <p className="text-xs text-gray-500 mt-1">Premium listings</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-purple-600">
                                    <svg className="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Highlighted properties
                                </div>
                            </div>
                        </div>

                        {/* Total Builders */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Builders</p>
                                    <p className="text-3xl font-bold text-gray-900 mt-1">{metrics?.total_builders || 0}</p>
                                    <p className="text-xs text-gray-500 mt-1">Partner developers</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-orange-600">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Construction partners
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* Charts and Quick Actions */}
                    <div className="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                        {/* Status Distribution */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center justify-between mb-6">
                                <h3 className="text-lg font-bold text-gray-900 font-serif">Property Status</h3>
                                <span className="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">
                                    LIVE
                                </span>
                            </div>
                            <div className="h-64">
                                {statusDistribution && statusDistribution.length > 0 ? (
                                    <Doughnut 
                                        data={statusChartData}
                                        options={chartOptions}
                                    />
                                ) : (
                                    <div className="h-full flex flex-col items-center justify-center text-gray-500">
                                        <svg className="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <p className="text-lg font-medium">No status data</p>
                                        <p className="text-sm mt-1">Property status will appear here</p>
                                    </div>
                                )}
                            </div>
                        </div>

                        {/* Configuration Types */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center justify-between mb-6">
                                <h3 className="text-lg font-bold text-gray-900 font-serif">Unit Types</h3>
                                <span className="text-xs font-medium text-blue-600 bg-blue-100 px-2 py-1 rounded-full">
                                    CONFIG
                                </span>
                            </div>
                            <div className="h-64">
                                {configSummary && configSummary.length > 0 ? (
                                    <Doughnut 
                                        data={configChartData}
                                        options={chartOptions}
                                    />
                                ) : (
                                    <div className="h-full flex flex-col items-center justify-center text-gray-500">
                                        <svg className="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                        <p className="text-lg font-medium">No configuration data</p>
                                        <p className="text-sm mt-1">Unit types will appear here</p>
                                    </div>
                                )}
                            </div>
                        </div>

                        {/* Quick Actions */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center justify-between mb-6">
                                <h3 className="text-lg font-bold text-gray-900 font-serif">Quick Actions</h3>
                                <span className="text-xs font-medium text-purple-600 bg-purple-100 px-2 py-1 rounded-full">
                                    ADMIN
                                </span>
                            </div>
                            <div className="space-y-4">
                                <Link
                                    href={route('projects.index')}
                                    className="w-full flex items-center justify-center px-4 py-4 bg-gradient-to-r from-blue-600 to-blue-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 shadow-lg hover:shadow-xl"
                                >
                                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                    </svg>
                                    Add New Property
                                </Link>
                                <Link
                                    href={route('builder.create')}
                                    className="w-full flex items-center justify-center px-4 py-4 bg-gradient-to-r from-green-600 to-green-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-green-700 hover:to-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200 shadow-lg hover:shadow-xl"
                                >
                                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    Add New Builder
                                </Link>
                               
                            </div>
                        </div>
                    </div>

                    {/* Recent Projects Table */}
                    <div className="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div className="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
                            <div className="flex items-center justify-between">
                                <h3 className="text-lg font-bold text-gray-900 font-serif">Recent Properties</h3>
                                <Link
                                    href={route('projects.index')}
                                    className="text-sm font-medium text-blue-600 hover:text-blue-800"
                                >
                                    View All Properties →
                                </Link>
                            </div>
                            <p className="text-sm text-gray-600 mt-1">Latest property additions to your portfolio</p>
                        </div>
                        <div className="overflow-x-auto">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Property
                                        </th>
                                        <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Builder
                                        </th>
                                        <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Added
                                        </th>
                                        <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {recentProjects && recentProjects.length > 0 ? (
                                        recentProjects.map((project) => (
                                            <tr key={project.id} className="hover:bg-gray-50 transition-colors duration-150">
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="flex items-center">
                                                        <div className="text-sm font-semibold text-gray-900">
                                                            {project.name}
                                                        </div>
                                                        {project.featured && (
                                                            <span className="ml-2 inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800 border border-purple-200">
                                                                <svg className="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                </svg>
                                                                Featured
                                                            </span>
                                                        )}
                                                    </div>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="text-sm text-gray-900 font-medium">{project.builder}</div>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <span className={`inline-flex items-center px-3 py-1 rounded-full text-xs font-medium border ${getStatusBadge(project.status)}`}>
                                                        {project.status}
                                                    </span>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {project.created_at}
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <Link
                                                        href={route('projects.index')}
                                                        className="text-blue-600 hover:text-blue-900 font-semibold transition-colors duration-150"
                                                    >
                                                        Manage
                                                    </Link>
                                                </td>
                                            </tr>
                                        ))
                                    ) : (
                                        <tr>
                                            <td colSpan="5" className="px-6 py-8 text-center">
                                                <div className="flex flex-col items-center justify-center text-gray-500">
                                                    <svg className="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                    </svg>
                                                    <p className="font-medium">No properties found</p>
                                                    <p className="text-sm mt-1">Add your first property to get started</p>
                                                </div>
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}