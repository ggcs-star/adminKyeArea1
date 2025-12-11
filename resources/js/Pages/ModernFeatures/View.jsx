import React from "react";
import { Head,Link } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

const View = ({ auth, project }) => {
   return (
    <AuthenticatedLayout user={auth.user}>
        <Head title={`Modern Features - ${project.project?.name || project.name}`} />
        
        <div className="min-h-screen bg-gradient-to-br from-gray-50 to-blue-50/30 py-8">
            <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                {/* Header Section */}
                <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-8">
                    <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div className="flex items-center mb-4 lg:mb-0">
                            <div className="bg-gradient-to-br from-blue-500 to-cyan-600 p-3 rounded-2xl shadow-lg mr-4">
                                <svg className="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h1 className="text-3xl font-bold text-gray-900">Modern Features</h1>
                                <p className="text-lg text-gray-600 mt-1 flex items-center">
                                    for <span className="ml-2 px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
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

                {/* Modern Features Card */}
                <div className="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                    {/* Card Header */}
                    <div className="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b border-gray-200">
                        <div className="flex items-center justify-between">
                            <h2 className="text-lg font-semibold text-gray-900 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Feature Details
                            </h2>
                            <span className="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                {project.modern_features ? Object.keys(project.modern_features).length : 0} Features
                            </span>
                        </div>
                    </div>

                    {/* Features Content */}
                    <div className="p-6">
                        {project.modern_features ? (
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                {Object.entries(project.modern_features).map(([key, value]) => {
                                    const isBoolean = typeof value === 'boolean';
                                    const displayValue = isBoolean ? (value ? 'Available' : 'Not Available') : (value || 'Not specified');
                                    
                                    return (
                                        <div key={key} className={`rounded-xl p-5 border-2 transition-all duration-200 hover:shadow-md ${
                                            isBoolean 
                                                ? value 
                                                    ? 'bg-green-50 border-green-200 hover:border-green-300' 
                                                    : 'bg-gray-50 border-gray-200 hover:border-gray-300'
                                                : 'bg-blue-50 border-blue-200 hover:border-blue-300'
                                        }`}>
                                            <div className="flex items-center justify-between mb-3">
                                                <h3 className="text-sm font-semibold text-gray-700 uppercase tracking-wide">
                                                    {key.replace(/_/g, ' ')}
                                                </h3>
                                                <div className={`w-3 h-3 rounded-full ${
                                                    isBoolean 
                                                        ? value ? 'bg-green-500' : 'bg-gray-400'
                                                        : 'bg-blue-500'
                                                }`}></div>
                                            </div>
                                            <div className={`text-lg font-semibold ${
                                                isBoolean 
                                                    ? value ? 'text-green-700' : 'text-gray-600'
                                                    : 'text-blue-700'
                                            }`}>
                                                {displayValue}
                                            </div>
                                            <div className="flex items-center mt-2 text-xs text-gray-500">
                                                <svg className="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                {isBoolean ? 'Feature Status' : 'Configuration'}
                                            </div>
                                        </div>
                                    );
                                })}
                            </div>
                        ) : (
                            <div className="text-center py-12">
                                <div className="bg-gradient-to-br from-gray-100 to-gray-200 w-24 h-24 rounded-2xl mx-auto mb-6 flex items-center justify-center">
                                    <svg className="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1} d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">No Modern Features Configured</h3>
                                <p className="text-gray-600 mb-6">This project doesn't have any modern features configured yet.</p>
                                <Link
                                    href={`/modern-features/${project.id}/edit`}
                                    className="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-xl shadow-sm hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 font-medium"
                                >
                                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                    </svg>
                                    Configure Features
                                </Link>
                            </div>
                        )}
                    </div>
                </div>

                {/* Statistics Section */}
                {project.modern_features && (
                    <div className="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <div className="flex items-center">
                                <div className="bg-green-100 p-3 rounded-xl mr-4">
                                    <svg className="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p className="text-sm font-medium text-gray-600">Available Features</p>
                                    <p className="text-2xl font-bold text-gray-900">
                                        {Object.values(project.modern_features).filter(val => val === true).length}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <div className="flex items-center">
                                <div className="bg-blue-100 p-3 rounded-xl mr-4">
                                    <svg className="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p className="text-sm font-medium text-gray-600">Text Configurations</p>
                                    <p className="text-2xl font-bold text-gray-900">
                                        {Object.values(project.modern_features).filter(val => typeof val === 'string' && val.trim() !== '').length}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div className="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <div className="flex items-center">
                                <div className="bg-purple-100 p-3 rounded-xl mr-4">
                                    <svg className="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z" />
                                    </svg>
                                </div>
                                <div>
                                    <p className="text-sm font-medium text-gray-600">Total Features</p>
                                    <p className="text-2xl font-bold text-gray-900">
                                        {Object.keys(project.modern_features).length}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                )}

                
            </div>
        </div>
    </AuthenticatedLayout>
);
};

export default View;
