import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link } from '@inertiajs/react';

const BuilderView = ({ builder, projectName }) => {
    if (!builder) return (
        <AuthenticatedLayout title="Builder Not Found">
            <div className="max-w-4xl mx-auto px-4 py-8">
                <div className="bg-white rounded-xl shadow-md p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" className="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h2 className="text-xl font-semibold text-gray-800 mb-2">No Builder Data Found</h2>
                    <p className="text-gray-600 mb-6">The builder information you're looking for doesn't exist or may have been removed.</p>
                    <Link
                        href="/builder/create"
                        className="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors"
                    >
                        Return to Builder Management
                    </Link>
                </div>
            </div>
        </AuthenticatedLayout>
    );

    // Function to check if logo_image_id is a valid URL
    const isValidUrl = (string) => {
        try {
            new URL(string);
            return true;
        } catch (_) {
            return false;
        }
    };

    return (
        <AuthenticatedLayout title={`${builder.name} - Builder Details`}>
            <div className="max-w-4xl mx-auto px-4 py-8">
                {/* Header */}
                <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                    <div>
                        <h1 className="text-3xl font-bold text-gray-900">Builder Details</h1>
                        <p className="text-gray-600 mt-1">Complete information about {builder.name}</p>
                    </div>
                    <Link
                        href="/builder/create"
                        className="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clipRule="evenodd" />
                        </svg>
                        Back to Builders
                    </Link>
                </div>

                {/* Builder Card */}
                <div className="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    {/* Card Header */}
                    <div className="bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-4 border-b border-gray-200">
                        <div className="flex items-center">
                            {builder.logo_image_id && isValidUrl(builder.logo_image_id) ? (
                                <div className="bg-white p-2 rounded-lg shadow-sm mr-4">
                                    <div className="w-12 h-12 flex items-center justify-center overflow-hidden rounded">
                                        <img
                                            src={builder.logo_image_id}
                                            alt={`${builder.name} logo`}
                                            className="w-full h-full object-contain"
                                            onError={(e) => {
                                                e.target.style.display = 'none';
                                                e.target.nextSibling.style.display = 'flex';
                                            }}
                                        />
                                        <div className="w-full h-full flex items-center justify-center bg-gray-100 rounded hidden">
                                            <span className="text-xs text-gray-500">Logo</span>
                                        </div>
                                    </div>
                                </div>
                            ) : (
                                <div className="bg-blue-100 p-3 rounded-lg mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            )}
                            <div>
                                <h2 className="text-2xl font-bold text-gray-900">{builder.name}</h2>
                                <p className="text-gray-600">Builder Information</p>
                            </div>
                        </div>
                    </div>

                    {/* Card Body */}
                    <div className="p-6">
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {/* Project Information */}
                            <div className="bg-gray-50 p-4 rounded-lg">
                                <h3 className="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fillRule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clipRule="evenodd" />
                                    </svg>
                                    Project Information
                                </h3>
                                <div className="space-y-2">
                                    <div>
                                        <p className="text-sm text-gray-500">Project Name</p>
                                        <p className="font-medium text-gray-900">{projectName}</p>
                                    </div>
                                </div>
                            </div>

                            {/* Contact Information */}
                            <div className="bg-gray-50 p-4 rounded-lg">
                                <h3 className="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                    Contact Information
                                </h3>
                                <div className="space-y-3">
                                    {builder.contact?.website && (
                                        <div>
                                            <p className="text-sm text-gray-500">Website</p>
                                            <a href={builder.contact.website} target="_blank" rel="noopener noreferrer" className="text-blue-600 hover:underline font-medium">
                                                {builder.contact.website}
                                            </a>
                                        </div>
                                    )}
                                    {builder.contact?.sales_email && (
                                        <div>
                                            <p className="text-sm text-gray-500">Sales Email</p>
                                            <a href={`mailto:${builder.contact.sales_email}`} className="text-gray-900 font-medium">
                                                {builder.contact.sales_email}
                                            </a>
                                        </div>
                                    )}
                                    {builder.contact?.phone && (
                                        <div>
                                            <p className="text-sm text-gray-500">Phone</p>
                                            <a href={`tel:${builder.contact.phone}`} className="text-gray-900 font-medium">
                                                {builder.contact.phone}
                                            </a>
                                        </div>
                                    )}
                                </div>
                            </div>

                            {/* Corporate Address */}
                            <div className="md:col-span-2 bg-gray-50 p-4 rounded-lg">
                                <h3 className="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fillRule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clipRule="evenodd" />
                                    </svg>
                                    Corporate Address
                                </h3>
                                <div className="bg-white p-3 rounded border border-gray-200">
                                    <p className="text-gray-800">{builder.corporate_address || 'No address provided'}</p>
                                </div>
                            </div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default BuilderView;