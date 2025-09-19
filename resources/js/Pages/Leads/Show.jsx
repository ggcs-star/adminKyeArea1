import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, usePage } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";

export default function Show({ auth }) {
    const { lead, project } = usePage().props;
    
    const formatDate = (dateObj) => {
        if (!dateObj) return "-";
        if (typeof dateObj === "object" && dateObj.$date) {
            return new Date(dateObj.$date).toLocaleString();
        }
        if (typeof dateObj === "string") {
            return new Date(dateObj).toLocaleString();
        }
        return "-";
    };

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title={`Lead: ${lead.name}`} />

            <div className="p-6 max-w-4xl mx-auto">
                {/* Header Section */}
                <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                    <div>
                        <h1 className="text-3xl font-bold text-gray-900">Lead Details</h1>
                        <p className="text-gray-600 mt-1">Comprehensive information about this potential customer</p>
                    </div>
                    <button
                        className="px-4 py-2.5 bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 rounded-lg transition flex items-center gap-2 shadow-sm"
                        onClick={() => Inertia.get("/leads")}
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z" clipRule="evenodd" />
                        </svg>
                        Back to Leads
                    </button>
                </div>

                <div className="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                    {/* Lead Information Section */}
                    <div className="p-6 border-b border-gray-200">
                        <h2 className="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" />
                            </svg>
                            Contact Information
                        </h2>
                        
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div className="space-y-1">
                                <label className="text-sm font-medium text-gray-500">Full Name</label>
                                <p className="text-gray-900 font-medium">{lead.name}</p>
                            </div>
                            <div className="space-y-1">
                                <label className="text-sm font-medium text-gray-500">Email Address</label>
                                <p className="text-gray-900">{lead.email}</p>
                            </div>
                            <div className="space-y-1">
                                <label className="text-sm font-medium text-gray-500">Mobile Number</label>
                                <p className="text-gray-900">{lead.mobile}</p>
                            </div>
                            <div className="space-y-1">
                                <label className="text-sm font-medium text-gray-500">Consent</label>
                                <span className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${lead.consent ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}`}>
                                    {lead.consent ? "Yes" : "No"}
                                </span>
                            </div>
                        </div>
                    </div>

                    {/* Preferences Section */}
                    <div className="p-6 border-b border-gray-200">
                        <h2 className="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-purple-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clipRule="evenodd" />
                            </svg>
                            Preferences
                        </h2>
                        
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div className="space-y-1">
                                <label className="text-sm font-medium text-gray-500">Looking For</label>
                                {Array.isArray(lead.looking_for) && lead.looking_for.length > 0 ? (
                                    <div className="flex flex-wrap gap-1">
                                        {lead.looking_for.map((item, i) => (
                                            <span key={i} className="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                {item}
                                            </span>
                                        ))}
                                    </div>
                                ) : (
                                    <p className="text-gray-400">-</p>
                                )}
                            </div>
                            <div className="space-y-1">
                                <label className="text-sm font-medium text-gray-500">Preferred Bedrooms</label>
                                {Array.isArray(lead.preferred_bedrooms) && lead.preferred_bedrooms.length > 0 ? (
                                    <div className="flex flex-wrap gap-1">
                                        {lead.preferred_bedrooms.map((item, i) => (
                                            <span key={i} className="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                {item} {item === '1' ? 'bed' : 'beds'}
                                            </span>
                                        ))}
                                    </div>
                                ) : (
                                    <p className="text-gray-400">-</p>
                                )}
                            </div>
                        </div>
                    </div>

                    {/* Project Details Section */}
                    <div className="p-6 border-b border-gray-200">
                        <h2 className="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-amber-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clipRule="evenodd" />
                            </svg>
                            Project Details
                        </h2>
                        
                        {project ? (
                            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div className="space-y-1">
                                    <label className="text-sm font-medium text-gray-500">Project Name</label>
                                    <p className="text-gray-900 font-medium">{project.project?.name || "-"}</p>
                                </div>
                                <div className="space-y-1">
                                    <label className="text-sm font-medium text-gray-500">Location</label>
                                    <p className="text-gray-900">{project.project?.location?.address || "-"}</p>
                                </div>
                                <div className="space-y-1">
                                    <label className="text-sm font-medium text-gray-500">Project Type</label>
                                    <p className="text-gray-900">{project.project?.type || "-"}</p>
                                </div>
                            </div>
                        ) : (
                            <div className="flex items-center gap-2 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clipRule="evenodd" />
                                </svg>
                                No project linked to this lead
                            </div>
                        )}
                    </div>

                    {/* Metadata Section */}
                    <div className="p-6">
                        <h2 className="text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clipRule="evenodd" />
                            </svg>
                            Metadata
                        </h2>
                        
                        <div className="space-y-1">
                            <label className="text-sm font-medium text-gray-500">Created At</label>
                            <p className="text-gray-900">{formatDate(lead.created_at)}</p>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}