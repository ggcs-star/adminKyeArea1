import React from "react";
import { Head, Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const ViewLocalityData = ({ auth, project }) => {
    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title={`Locality Data - ${project.project?.name || project.name}`} />

            <div className="min-h-screen bg-gradient-to-br from-gray-50 to-green-50/30 py-8">
                <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    {/* Header Section */}
                    <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-8">
                        <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                            <div className="flex items-center mb-4 lg:mb-0">
                                <div className="bg-gradient-to-br from-green-500 to-teal-600 p-3 rounded-2xl shadow-lg mr-4">
                                    <svg className="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h1 className="text-3xl font-bold text-gray-900">Locality Data</h1>
                                    <p className="text-lg text-gray-600 mt-1 flex items-center">
                                        for <span className="ml-2 px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">
                                            {project.project?.name || project.name}
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <div className="flex space-x-3">
                               <button
                                onClick={() => window.history.back()}
                                 className="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wider hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 shadow-lg hover:shadow-xl"
                            >
                                <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                               Back to List 
                            </button>

                            </div>
                        </div>
                    </div>

                    {/* Locality Data Card */}
                    <div className="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                        {/* Card Header */}
                        <div className="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b border-gray-200">
                            <div className="flex items-center justify-between">
                                <h2 className="text-lg font-semibold text-gray-900 flex items-center">
                                    <svg className="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Neighborhood Information
                                </h2>
                                <span className="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                                    {project.localityData ? Object.keys(project.localityData).length : 0} Data Points
                                </span>
                            </div>
                        </div>

                        {/* Content */}
                        <div className="p-6">
                            {project.localityData ? (
                                <div className="space-y-6">
                                    {/* Basic Information */}
                                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                        {[
                                            { key: 'name', label: 'Locality Name', icon: '🏘️', color: 'green' },
                                            { key: 'city', label: 'City', icon: '🏙️', color: 'blue' },
                                            { key: 'state', label: 'State', icon: '🗺️', color: 'purple' },
                                            { key: 'pinCode', label: 'Pin Code', icon: '📮', color: 'orange' },
                                        ].map((item) => (
                                            <div key={item.key} className="bg-gray-50 rounded-xl p-4 border border-gray-200">
                                                <div className="flex items-center mb-2">
                                                    <span className="text-2xl mr-2">{item.icon}</span>
                                                    <h3 className="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                                                        {item.label}
                                                    </h3>
                                                </div>
                                                <div className="text-lg font-semibold text-gray-900">
                                                    {project.localityData[item.key] || 'N/A'}
                                                </div>
                                            </div>
                                        ))}
                                    </div>

                                    {/* Real Estate Metrics */}
                                    <div className="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                        <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                            <svg className="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                            </svg>
                                            Real Estate Metrics
                                        </h3>
                                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                            {[
                                                { key: 'growth', label: 'Growth Rate', icon: '📈' },
                                                { key: 'growthPeriod', label: 'Growth Period', icon: '⏰' },
                                                { key: 'avgRate', label: 'Average Rate', icon: '💰' },
                                                { key: 'avgRentalYield', label: 'Rental Yield', icon: '🏠' },
                                            ].map((item) => (
                                                <div key={item.key} className="bg-white rounded-lg p-3">
                                                    <div className="flex items-center mb-1">
                                                        <span className="text-xl mr-2">{item.icon}</span>
                                                        <span className="text-sm font-medium text-gray-600">{item.label}</span>
                                                    </div>
                                                    <div className="text-base font-semibold text-gray-900">
                                                        {project.localityData[item.key] || 'N/A'}
                                                    </div>
                                                </div>
                                            ))}
                                        </div>
                                    </div>

                                    {/* Transportation & Connectivity */}
                                    <div className="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                        <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                            <svg className="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                            Transportation & Connectivity
                                        </h3>
                                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                            {[
                                                { key: 'nearestMetro', label: 'Nearest Metro', icon: '🚇' },
                                                { key: 'nearestBusStop', label: 'Nearest Bus Stop', icon: '🚌' },
                                                { key: 'connectivity', label: 'Connectivity', icon: '🛣️' },
                                                { key: 'walkScore', label: 'Walk Score', icon: '🚶' },
                                                { key: 'transitScore', label: 'Transit Score', icon: '🚉' },
                                            ].map((item) => (
                                                <div key={item.key} className="bg-white rounded-lg p-3">
                                                    <div className="flex items-center mb-1">
                                                        <span className="text-xl mr-2">{item.icon}</span>
                                                        <span className="text-sm font-medium text-gray-600">{item.label}</span>
                                                    </div>
                                                    <div className="text-base font-semibold text-gray-900">
                                                        {project.localityData[item.key] || 'N/A'}
                                                    </div>
                                                </div>
                                            ))}
                                        </div>
                                    </div>

                                    {/* Amenities & Infrastructure */}
                                    <div className="bg-gradient-to-r from-orange-50 to-red-50 rounded-xl p-6 border border-orange-200">
                                        <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                            <svg className="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                            </svg>
                                            Amenities & Infrastructure
                                        </h3>
                                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                            {[
                                                { key: 'schools', label: 'Schools', icon: '🏫' },
                                                { key: 'hospitals', label: 'Hospitals', icon: '🏥' },
                                                { key: 'shoppingCenters', label: 'Shopping Centers', icon: '🛍️' },
                                                { key: 'parks', label: 'Parks', icon: '🌳' },
                                            ].map((item) => (
                                                <div key={item.key} className="bg-white rounded-lg p-3 text-center">
                                                    <div className="text-3xl mb-2">{item.icon}</div>
                                                    <div className="text-sm font-medium text-gray-600 mb-1">{item.label}</div>
                                                    <div className="text-2xl font-bold text-gray-900">
                                                        {project.localityData[item.key] || '0'}
                                                    </div>
                                                </div>
                                            ))}
                                        </div>
                                    </div>

                                    {/* Safety & Future Developments */}
                                    <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div className="bg-gradient-to-r from-gray-50 to-blue-gray-50 rounded-xl p-6 border border-gray-200">
                                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                                <svg className="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                </svg>
                                                Safety Information
                                            </h3>
                                            <div className="bg-white rounded-lg p-4">
                                                <div className="text-sm font-medium text-gray-600 mb-2">Crime Rate</div>
                                                <div className="text-xl font-semibold text-gray-900">
                                                    {project.localityData.crimeRate || 'N/A'}
                                                </div>
                                            </div>
                                        </div>

                                        <div className="bg-gradient-to-r from-teal-50 to-green-50 rounded-xl p-6 border border-teal-200">
                                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                                <svg className="w-5 h-5 mr-2 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                </svg>
                                                Future Developments
                                            </h3>
                                            <div className="bg-white rounded-lg p-4">
                                                <div className="text-sm font-medium text-gray-600 mb-2">Planned Developments</div>
                                                <div className="text-base text-gray-900">
                                                    {project.localityData.futureDevelopments || 'No future developments reported'}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ) : (
                                <div className="text-center py-12">
                                    <div className="bg-gradient-to-br from-gray-100 to-gray-200 w-24 h-24 rounded-2xl mx-auto mb-6 flex items-center justify-center">
                                        <svg className="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <h3 className="text-xl font-semibold text-gray-900 mb-2">No Locality Data Available</h3>
                                    <p className="text-gray-600 mb-6">This project doesn't have any locality information configured yet.</p>
                                    <Link
                                        href={`/localityData/${project.id}/edit`}
                                        className="inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-600 to-teal-600 text-white rounded-xl shadow-sm hover:from-green-700 hover:to-teal-700 transition-all duration-200 font-medium"
                                    >
                                        <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                        </svg>
                                        Add Locality Data
                                    </Link>
                                </div>
                            )}
                        </div>
                    </div>


                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default ViewLocalityData;
