import React from "react";
import { Head, Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const BuildingView = ({ auth, project }) => {
    console.log(project)
    return (
    <AuthenticatedLayout user={auth.user}>
        <Head title={`Building Info - ${project.project.name}`} />
        
        <div className="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50/30 py-8">
            <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                {/* Header Section */}
                <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-8">
                    <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div className="flex items-center mb-4 lg:mb-0">
                            <div className="bg-gradient-to-br from-blue-500 to-indigo-600 p-3 rounded-2xl shadow-lg mr-4">
                                <svg className="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div>
                                <h1 className="text-3xl font-bold text-gray-900">Building Information</h1>
                                <p className="text-lg text-gray-600 mt-1 flex items-center">
                                    for <span className="ml-2 px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">{project.project.name}</span>
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

                {/* Building Information Card */}
                <div className="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                    {/* Card Header */}
                    <div className="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b border-gray-200">
                        <div className="flex items-center justify-between">
                            <h2 className="text-lg font-semibold text-gray-900 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Building Details
                            </h2>
                            <span className="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                Last Updated: {project.building?.updated_at ? new Date(project.building.updated_at).toLocaleDateString() : 'N/A'}
                            </span>
                        </div>
                    </div>

                    {/* Information Grid */}
                    <div className="p-6">
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {[
                                { key: 'entry_direction', label: 'Entry Direction', icon: '🚪' },
                                { key: 'common_lighting', label: 'Common Lighting', icon: '💡' },
                                { key: 'number_of_lifts', label: 'Number of Lifts', icon: '🛗' },
                                { key: 'direction_info', label: 'Direction Information', icon: '🧭' },
                                { key: 'security', label: 'Security', icon: '🔒' }
                            ].map((item, index) => (
                                <div key={item.key} className={`bg-gray-50 rounded-xl p-5 hover:bg-gray-100 transition-colors duration-200 ${index >= 3 ? 'md:col-span-2' : ''}`}>
                                    <div className="flex items-center mb-3">
                                        <span className="text-2xl mr-3">{item.icon}</span>
                                        <h3 className="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                                            {item.label}
                                        </h3>
                                    </div>
                                    <div className={`pl-9 ${project.building?.[item.key] ? 'text-gray-900' : 'text-gray-400 italic'}`}>
                                        {project.building?.[item.key] || "Not specified"}
                                    </div>
                                </div>
                            ))}
                        </div>

                        {/* Additional Information Section */}
                        {!project.building && (
                            <div className="mt-6 bg-yellow-50 border border-yellow-200 rounded-xl p-6 text-center">
                                <svg className="w-12 h-12 text-yellow-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1} d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                </svg>
                                <h3 className="text-lg font-semibold text-yellow-800 mb-2">No Building Information Available</h3>
                                <p className="text-yellow-700">This project doesn't have any building information yet.</p>
                                <Link
                                    href={`/projects/${project.id}/building/edit`}
                                    className="inline-flex items-center px-4 py-2 mt-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors duration-200 font-medium"
                                >
                                    <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                    </svg>
                                    Add Building Information
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

export default BuildingView;
