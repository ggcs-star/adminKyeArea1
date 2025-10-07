// resources/js/Pages/Admin/Analytics.jsx
import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    BarElement,
    LineElement,
    PointElement,
    ArcElement,
    Title,
    Tooltip,
    Legend,
} from 'chart.js';
import { Bar, Line } from 'react-chartjs-2';

ChartJS.register(
    CategoryScale,
    LinearScale,
    BarElement,
    LineElement,
    PointElement,
    ArcElement,
    Title,
    Tooltip,
    Legend
);

export default function Analytics({ monthlyTrends, builderStats }) {
    // Process monthly trends data
    const processMonthlyTrends = () => {
        if (!monthlyTrends || !Array.isArray(monthlyTrends)) {
            return {
                labels: [],
                datasets: []
            };
        }

        const sortedTrends = [...monthlyTrends].sort((a, b) => {
            if (a._id.year !== b._id.year) {
                return a._id.year - b._id.year;
            }
            return a._id.month - b._id.month;
        });

        const labels = sortedTrends.map(item => {
            const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            return `${monthNames[item._id.month - 1]} ${item._id.year}`;
        });

        const data = sortedTrends.map(item => item.count);

        return {
            labels,
            datasets: [
                {
                    label: 'Projects Created',
                    data,
                    backgroundColor: 'rgba(59, 130, 246, 0.5)',
                    borderColor: 'rgb(59, 130, 246)',
                    borderWidth: 2,
                    tension: 0.1,
                    fill: true,
                },
            ],
        };
    };

    // Process builder stats data
    const processBuilderStats = () => {
        if (!builderStats || !Array.isArray(builderStats)) {
            return {
                labels: [],
                datasets: []
            };
        }

        const labels = builderStats.map(item => item.builder);
        const data = builderStats.map(item => item.count);

        return {
            labels,
            datasets: [
                {
                    label: 'Number of Projects',
                    data,
                    backgroundColor: [
                        '#3B82F6',
                        '#8B5CF6',
                        '#EC4899',
                        '#F59E0B',
                        '#10B981',
                        '#EF4444',
                        '#06B6D4',
                        '#84CC16',
                        '#F97316',
                        '#6366F1',
                    ],
                    borderWidth: 2,
                },
            ],
        };
    };

    const monthlyData = processMonthlyTrends();
    const builderData = processBuilderStats();

    const chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Project Creation Trends',
            },
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1,
                },
            },
        },
    };

    const builderChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            },
        },
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1,
                },
            },
        },
    };

    const totalProjects = monthlyTrends?.reduce((sum, item) => sum + item.count, 0) || 0;
    const topBuilder = builderStats?.[0]?.builder || 'N/A';
    const topBuilderCount = builderStats?.[0]?.count || 0;

    // Generate unique keys for table rows
    const getMonthlyTrendKey = (trend) => {
        return `${trend._id.year}-${trend._id.month}`;
    };

    const getBuilderKey = (builder, index) => {
        return `${builder.builder}-${index}`;
    };

    return (
        <AuthenticatedLayout>
            <Head title="Real Estate Analytics" />

            <div className="min-h-screen bg-gray-50 py-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    {/* Header Section */}
                    <div className="mb-8">
                        <div className="flex flex-col lg:flex-row lg:justify-between lg:items-center gap-4">
                            <div className="flex-1">
                                <h1 className="text-3xl font-bold text-gray-900 font-serif">Property Analytics Hub</h1>
                                <p className="mt-2 text-lg text-gray-600 max-w-2xl">
                                    Comprehensive insights and market trends for your real estate portfolio
                                </p>
                                <div className="mt-3 flex flex-wrap gap-2">
                                    <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                        📊 Market Intelligence
                                    </span>
                                    <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        🏗️ Builder Performance
                                    </span>
                                    <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        📈 Growth Trends
                                    </span>
                                </div>
                            </div>
                            <Link
                                href={route('admin.dashboard')}
                                className="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 shadow-lg hover:shadow-xl"
                            >
                                <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Dashboard
                            </Link>
                        </div>
                    </div>

                    {/* Key Metrics Cards */}
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        {/* Total Projects Card */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Total Properties</p>
                                    <p className="text-3xl font-bold text-gray-900 mt-1">{totalProjects}</p>
                                    <p className="text-xs text-gray-500 mt-1">Last 12 months</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-green-600">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    Active portfolio growth
                                </div>
                            </div>
                        </div>

                        {/* Top Builder Card */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-green-500 to-green-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Top Builder</p>
                                    <p className="text-xl font-bold text-gray-900 mt-1 truncate">{topBuilder}</p>
                                    <p className="text-sm text-gray-600 mt-1">{topBuilderCount} projects delivered</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-yellow-600">
                                    <svg className="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    Leading developer
                                </div>
                            </div>
                        </div>

                        {/* Market Analysis Card */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center">
                                <div className="flex-shrink-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-4 shadow-lg">
                                    <svg className="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <div className="ml-5 flex-1">
                                    <p className="text-sm font-semibold text-gray-500 uppercase tracking-wide">Market Analysis</p>
                                    <p className="text-3xl font-bold text-gray-900 mt-1">
                                        {monthlyTrends?.length || 0}
                                    </p>
                                    <p className="text-xs text-gray-500 mt-1">Active tracking periods</p>
                                </div>
                            </div>
                            <div className="mt-4 pt-4 border-t border-gray-100">
                                <div className="flex items-center text-sm text-blue-600">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    Real-time insights
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* Charts Section */}
                    <div className="grid grid-cols-1 xl:grid-cols-2 gap-8 mb-8">
                        {/* Property Launch Trends */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center justify-between mb-6">
                                <h3 className="text-xl font-bold text-gray-900 font-serif">
                                    Property Launch Trends
                                </h3>
                                <span className="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                    Last 12 Months
                                </span>
                            </div>
                            <div className="h-80">
                                {monthlyTrends && monthlyTrends.length > 0 ? (
                                    <Line 
                                        data={monthlyData}
                                        options={chartOptions}
                                    />
                                ) : (
                                    <div className="h-full flex flex-col items-center justify-center text-gray-500">
                                        <svg className="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <p className="text-lg font-medium">No launch data available</p>
                                        <p className="text-sm mt-1">Property launches will appear here</p>
                                    </div>
                                )}
                            </div>
                        </div>

                        {/* Builder Performance */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 p-6 hover:shadow-xl transition-shadow duration-300">
                            <div className="flex items-center justify-between mb-6">
                                <h3 className="text-xl font-bold text-gray-900 font-serif">
                                    Builder Performance
                                </h3>
                                <span className="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                    Project Count
                                </span>
                            </div>
                            <div className="h-80">
                                {builderStats && builderStats.length > 0 ? (
                                    <Bar 
                                        data={builderData}
                                        options={builderChartOptions}
                                    />
                                ) : (
                                    <div className="h-full flex flex-col items-center justify-center text-gray-500">
                                        <svg className="w-16 h-16 mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <p className="text-lg font-medium">No builder data available</p>
                                        <p className="text-sm mt-1">Builder statistics will appear here</p>
                                    </div>
                                )}
                            </div>
                        </div>
                    </div>

                    {/* Detailed Analytics Tables */}
                    <div className="grid grid-cols-1 xl:grid-cols-2 gap-8">
                        {/* Monthly Property Launch Details */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div className="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
                                <div className="flex items-center justify-between">
                                    <h3 className="text-lg font-bold text-gray-900 font-serif">
                                        Monthly Launch Calendar
                                    </h3>
                                    <span className="text-xs font-medium text-blue-600 bg-blue-100 px-2 py-1 rounded-full">
                                        UPDATED
                                    </span>
                                </div>
                                <p className="text-sm text-gray-600 mt-1">Detailed monthly property launch breakdown</p>
                            </div>
                            <div className="overflow-x-auto">
                                <table className="min-w-full divide-y divide-gray-200">
                                    <thead className="bg-gray-50">
                                        <tr>
                                            <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                Period
                                            </th>
                                            <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                Year
                                            </th>
                                            <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                Properties Launched
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody className="bg-white divide-y divide-gray-200">
                                        {monthlyTrends && monthlyTrends.length > 0 ? (
                                            [...monthlyTrends]
                                                .sort((a, b) => {
                                                    if (b._id.year !== a._id.year) {
                                                        return b._id.year - a._id.year;
                                                    }
                                                    return b._id.month - a._id.month;
                                                })
                                                .map((trend) => (
                                                <tr key={getMonthlyTrendKey(trend)} className="hover:bg-gray-50 transition-colors duration-150">
                                                    <td className="px-6 py-4 whitespace-nowrap">
                                                        <div className="text-sm font-semibold text-gray-900">
                                                            {new Date(trend._id.year, trend._id.month - 1).toLocaleString('default', { month: 'long' })}
                                                        </div>
                                                    </td>
                                                    <td className="px-6 py-4 whitespace-nowrap">
                                                        <div className="text-sm text-gray-600 bg-gray-100 px-2 py-1 rounded-full text-center inline-block min-w-12">
                                                            {trend._id.year}
                                                        </div>
                                                    </td>
                                                    <td className="px-6 py-4 whitespace-nowrap">
                                                        <span className="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                            <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                            </svg>
                                                            {trend.count} properties
                                                        </span>
                                                    </td>
                                                </tr>
                                            ))
                                        ) : (
                                            <tr>
                                                <td colSpan="3" className="px-6 py-8 text-center">
                                                    <div className="flex flex-col items-center justify-center text-gray-500">
                                                        <svg className="w-12 h-12 mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                        <p className="font-medium">No launch calendar data</p>
                                                        <p className="text-sm mt-1">Monthly launches will appear here</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        )}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {/* Builder Performance Rankings */}
                        <div className="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div className="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
                                <div className="flex items-center justify-between">
                                    <h3 className="text-lg font-bold text-gray-900 font-serif">
                                        Builder Rankings
                                    </h3>
                                    <span className="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">
                                        PERFORMANCE
                                    </span>
                                </div>
                                <p className="text-sm text-gray-600 mt-1">Top developers by project delivery</p>
                            </div>
                            <div className="overflow-x-auto">
                                <table className="min-w-full divide-y divide-gray-200">
                                    <thead className="bg-gray-50">
                                        <tr>
                                            <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                Rank
                                            </th>
                                            <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                Builder
                                            </th>
                                            <th className="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                Projects
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody className="bg-white divide-y divide-gray-200">
                                        {builderStats && builderStats.length > 0 ? (
                                            builderStats.map((builder, index) => (
                                                <tr key={getBuilderKey(builder, index)} className="hover:bg-gray-50 transition-colors duration-150">
                                                    <td className="px-6 py-4 whitespace-nowrap">
                                                        <span className={`inline-flex items-center justify-center w-8 h-8 rounded-full text-sm font-bold ${
                                                            index === 0 
                                                                ? 'bg-yellow-100 text-yellow-800 border border-yellow-200'
                                                                : index === 1
                                                                ? 'bg-gray-100 text-gray-800 border border-gray-200'
                                                                : index === 2
                                                                ? 'bg-orange-100 text-orange-800 border border-orange-200'
                                                                : 'bg-blue-100 text-blue-800 border border-blue-200'
                                                        }`}>
                                                            #{index + 1}
                                                        </span>
                                                    </td>
                                                    <td className="px-6 py-4 whitespace-nowrap">
                                                        <div className="text-sm font-semibold text-gray-900">
                                                            {builder.builder}
                                                        </div>
                                                    </td>
                                                    <td className="px-6 py-4 whitespace-nowrap">
                                                        <div className="flex items-center">
                                                            <span className="text-sm font-medium text-gray-900 mr-2">
                                                                {builder.count}
                                                            </span>
                                                            <span className="text-xs text-gray-500">
                                                                properties
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ))
                                        ) : (
                                            <tr>
                                                <td colSpan="3" className="px-6 py-8 text-center">
                                                    <div className="flex flex-col items-center justify-center text-gray-500">
                                                        <svg className="w-12 h-12 mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                        </svg>
                                                        <p className="font-medium">No builder rankings available</p>
                                                        <p className="text-sm mt-1">Builder data will appear here</p>
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
            </div>
        </AuthenticatedLayout>
    );
}