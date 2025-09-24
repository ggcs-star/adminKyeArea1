import React, { useState } from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, usePage } from "@inertiajs/react";
import ConfigurationForm from "@/Components/ConfigurationForm";
import { Inertia } from "@inertiajs/inertia";

export default function Index({ auth }) {
    const { configurations } = usePage().props;
    const [showForm, setShowForm] = useState(false);
    const [editingConfig, setEditingConfig] = useState(null);

    return (
        <AuthenticatedLayout user={auth.user}>
            <Head title="Configurations" />

            <div className="p-6 max-w-7xl mx-auto">
                {/* Header */}
                <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                    <div>
                        <h1 className="text-3xl font-bold text-gray-900">Configurations</h1>
                        <p className="text-gray-600 mt-1">Manage project configurations and pricing</p>
                    </div>
                    <button
                        onClick={() => {
                            setEditingConfig(null);
                            setShowForm(true);
                        }}
                        className="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2.5 rounded-lg shadow transition flex items-center gap-2"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clipRule="evenodd" />
                        </svg>
                        Create Configuration
                    </button>
                </div>

                {/* Table */}
                <div className="overflow-hidden bg-white rounded-xl shadow-md border border-gray-100">
                    <table className="min-w-full divide-y divide-gray-200">
                        <thead className="bg-gray-50">
                            <tr>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Project
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Type
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Price
                                </th>
                                <th className="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200">
                            {configurations.data.map((project, idx) => (
                                <tr key={idx} className="hover:bg-gray-50/80 transition-all duration-150">
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        <div className="text-sm font-semibold text-gray-900">{project.project_name}</div>
                                        <div className="text-xs text-gray-500 mt-1">ID: {project.project_id}</div>
                                    </td>
                                    <td className="px-6 py-5">
                                        {Object.entries(project.configurations).map(([type], i) => (
                                            <div key={i} className="text-sm text-gray-900 mb-1 last:mb-0">
                                                <span className="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                    {type}
                                                </span>
                                            </div>
                                        ))}
                                    </td>
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        {Object.entries(project.configurations).map(([_, config], i) => (
                                            <div key={i} className="text-sm font-medium text-gray-900 mb-1 last:mb-0">
                                                {config?.price ? `${config.price}` : '-'}
                                            </div>
                                        ))}
                                    </td>
                                    <td className="px-6 py-5 whitespace-nowrap">
                                        {Object.entries(project.configurations).map(([type, config], i) => (
                                            <div key={i} className="flex gap-2 mb-2 last:mb-0">
                                                <button
                                                    className="px-3 py-1.5 bg-green-50 hover:bg-green-100 text-green-700 rounded-md transition text-sm font-medium flex items-center gap-1.5"
                                                    onClick={() => Inertia.get(`/configurations/${project.project_id}/${type}`)}
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    View
                                                </button>
                                                <button
                                                    className="text-indigo-600 hover:text-indigo-900 bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-md text-sm transition-colors flex items-center"
                                                    onClick={() => {
                                                        setEditingConfig({
                                                            project_id: project.project_id,
                                                            typeKey: type,
                                                            typeData: project.configurations[type], // <--- pass the type object including BHK keys
                                                        });
                                                        setShowForm(true);
                                                    }}
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    Edit
                                                </button>


                                                <button
                                                    className="px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-700 rounded-md transition text-sm font-medium flex items-center gap-1.5"
                                                    onClick={() => {
                                                        if (confirm(`Are you sure you want to delete ${type}?`)) {
                                                            Inertia.delete(`/configurations/${project.project_id}/${type}`);
                                                        }
                                                    }}
                                                >
                                                    <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" />
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        ))}
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>

                    {/* Pagination */}
                    {configurations.data.length > 0 && (
                        <div className="flex flex-col sm:flex-row justify-between items-center p-4 bg-gray-50 border-t gap-4">
                            <div className="text-sm text-gray-700">
                                Showing <span className="font-medium">{configurations.from}</span> to <span className="font-medium">{configurations.to}</span> of{' '}
                                <span className="font-medium">{configurations.total}</span> results
                            </div>
                            <div className="flex gap-2">
                                <button
                                    disabled={!configurations.prev_page_url}
                                    onClick={() => Inertia.get(configurations.prev_page_url)}
                                    className={`px-4 py-2 rounded-md font-medium transition flex items-center gap-1.5 ${!configurations.prev_page_url
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
                                    disabled={!configurations.next_page_url}
                                    onClick={() => Inertia.get(configurations.next_page_url)}
                                    className={`px-4 py-2 rounded-md font-medium transition flex items-center gap-1.5 ${!configurations.next_page_url
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

                {/* Empty State */}
                {configurations.data.length === 0 && (
                    <div className="bg-white rounded-xl shadow-sm p-12 text-center border border-gray-200 mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-16 w-16 mx-auto text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 className="text-lg font-medium text-gray-900 mt-4">No configurations yet</h3>
                        <p className="text-gray-500 mt-2">Get started by creating your first configuration.</p>
                        <button
                            onClick={() => {
                                setEditingConfig(null);
                                setShowForm(true);
                            }}
                            className="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2.5 rounded-lg shadow transition"
                        >
                            Create Configuration
                        </button>
                    </div>
                )}

                {/* Modal */}
                {showForm && (
                    <div
                        className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
                        onClick={() => setShowForm(false)}
                    >
                        <div
                            className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
                            onClick={() => setShowForm(false)}
                        >
                            <div
                                className="bg-white rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto"
                                onClick={(e) => e.stopPropagation()}
                            >
                                <div className="p-6">
                                    <ConfigurationForm
                                        closeModal={() => setShowForm(false)}
                                        configData={editingConfig}
                                    />
                                </div>
                            </div>
                        </div>

                    </div>
                )}


            </div>
        </AuthenticatedLayout>
    );
}