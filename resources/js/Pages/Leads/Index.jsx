import React, { useState } from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, usePage } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";

export default function Index({ auth }) {
    const { leads } = usePage().props;
    const [selectedLead, setSelectedLead] = useState(null);

    const View = (lead) => {
        const id = lead._id || lead.id;
        if (!id) {
            console.error('View ID is missing');
            return;
        }
        const url = route('leads.show', { id });
        Inertia.visit(url);
    };

    const Delete = (lead) => {
        if (!confirm(`Are you sure you want to delete ${lead.name}'s lead?`)) return;

        const id = lead._id || lead.id;
        if (!id) {
            console.error('Delete ID is missing');
            return;
        }
        const url = route('leads.destroy', { id });
        Inertia.delete(url);
    };

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Leads" />

            <div className="p-6 max-w-7xl mx-auto">
                {/* Header */}
                <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                    <div>
                        <h1 className="text-3xl font-bold text-gray-900">Leads Management</h1>
                        <p className="text-gray-600 mt-1">View and manage all your potential customer leads</p>
                    </div>
                    <div className="text-sm text-gray-500 bg-blue-50 px-4 py-2 rounded-lg">
                        Total: <span className="font-semibold text-blue-700">{leads.total || leads.data.length}</span> leads
                    </div>
                </div>

                {/* Table */}
                <div className="overflow-hidden bg-white rounded-xl shadow-md border border-gray-100">
                    <table className="min-w-full divide-y divide-gray-200">
                        <thead className="bg-gray-50">
                            <tr>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Name
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Email
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Mobile
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Looking For
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Bedrooms
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Consent
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200">
                            {leads.data.map((lead, idx) => (
                                <tr key={idx} className="hover:bg-gray-50/80 transition-all duration-150">
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        <div className="text-sm font-semibold text-gray-900">{lead.name}</div>
                                    </td>
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        <div className="text-sm text-gray-900">{lead.email}</div>
                                    </td>
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        <div className="text-sm text-gray-900">{lead.mobile}</div>
                                    </td>
                                    <td className="px-6 py-5">
                                        <div className="text-sm text-gray-900 max-w-xs">
                                            {Array.isArray(lead.looking_for) && lead.looking_for.length > 0 ? (
                                                <div className="flex flex-wrap gap-1">
                                                    {lead.looking_for.map((item, i) => (
                                                        <span key={i} className="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                            {item}
                                                        </span>
                                                    ))}
                                                </div>
                                            ) : (
                                                <span className="text-gray-400">-</span>
                                            )}
                                        </div>
                                    </td>
                                    <td className="px-6 py-5">
                                        <div className="text-sm text-gray-900">
                                            {Array.isArray(lead.preferred_bedrooms) && lead.preferred_bedrooms.length > 0 ? (
                                                <div className="flex flex-wrap gap-1">
                                                    {lead.preferred_bedrooms.map((item, i) => (
                                                        <span key={i} className="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                            {item} {item === '1' ? 'bed' : 'beds'}
                                                        </span>
                                                    ))}
                                                </div>
                                            ) : (
                                                <span className="text-gray-400">-</span>
                                            )}
                                        </div>
                                    </td>
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        <span className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${lead.consent ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}`}>
                                            {lead.consent ? "Yes" : "No"}
                                        </span>
                                    </td>
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        <div className="flex items-center gap-2">
                                            <button
                                                onClick={() => View(lead)}
                                                className="text-green-600 hover:text-green-900 bg-green-50 hover:bg-green-100 px-3 py-1.5 rounded-md text-sm transition-colors flex items-center"
                                                title="View lead details"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                View
                                            </button>
                                            <button
                                                onClick={() => Delete(lead)}
                                                className="px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-700 rounded-md transition text-sm font-medium flex items-center gap-1.5"
                                                title="Delete lead"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" />
                                                </svg>
                                                Delete
                                            </button>


                                        </div>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>

                    {/* Empty State */}
                    {leads.data.length === 0 && (
                        <div className="text-center py-12">
                            <svg className="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                            <h3 className="mt-2 text-sm font-medium text-gray-900">No leads</h3>
                            <p className="mt-1 text-sm text-gray-500">Get started by capturing new leads.</p>
                        </div>
                    )}

                    {/* Pagination */}
                    {leads.data.length > 0 && (
                        <div className="flex flex-col sm:flex-row justify-between items-center p-4 bg-gray-50 border-t gap-4">
                            <div className="text-sm text-gray-700">
                                Showing <span className="font-medium">{leads.from}</span> to <span className="font-medium">{leads.to}</span> of{' '}
                                <span className="font-medium">{leads.total}</span> results
                            </div>
                            <div className="flex gap-2">
                                <button
                                    disabled={!leads.prev_page_url}
                                    onClick={() => Inertia.get(leads.prev_page_url)}
                                    className={`px-4 py-2 rounded-md font-medium transition flex items-center gap-1.5 ${!leads.prev_page_url
                                            ? 'bg-gray-100 text-gray-400 cursor-not-allowed'
                                            : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 shadow-sm'
                                        }`}
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fillRule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clipRule="evenodd" />
                                    </svg>
                                    Previous
                                </button>
                                <button
                                    disabled={!leads.next_page_url}
                                    onClick={() => Inertia.get(leads.next_page_url)}
                                    className={`px-4 py-2 rounded-md font-medium transition flex items-center gap-1.5 ${!leads.next_page_url
                                            ? 'bg-gray-100 text-gray-400 cursor-not-allowed'
                                            : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 shadow-sm'
                                        }`}
                                >
                                    Next
                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    )}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}