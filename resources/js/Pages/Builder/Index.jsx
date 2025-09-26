import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import { usePage, Link,Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import BuilderForm from '@/Components/BuilderForm';

const BuilderCreate = () => {
    const { projects, allProjects } = usePage().props;

    const [form, setForm] = useState({
        project_id: '',
        builder: {
            name: '',
            logo_image_id: '',
            corporate_address: '',
            contact: {
                website: '',
                sales_email: '',
                phone: ''
            }
        }
    });

    const [isPopupOpen, setIsPopupOpen] = useState(false);
    const [isEdit, setIsEdit] = useState(false);

    const handleChange = (e) => {
        const { name, value } = e.target;
        if (name.startsWith('builder.contact.')) {
            const field = name.split('.')[2];
            setForm(prev => ({
                ...prev,
                builder: {
                    ...prev.builder,
                    contact: {
                        ...prev.builder.contact,
                        [field]: value
                    }
                }
            }));
        } else if (name.startsWith('builder.')) {
            const field = name.split('.')[1];
            setForm(prev => ({
                ...prev,
                builder: {
                    ...prev.builder,
                    [field]: value
                }
            }));
        } else {
            setForm(prev => ({
                ...prev,
                [name]: value
            }));
        }
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        Inertia.post('/builder/store', form);
        setIsPopupOpen(false);
    };

    const openEditPopup = (project) => {
        setForm({
            project_id: project._id,
            builder: {
                name: project.builder.name || '',
                logo_image_id: project.builder.logo_image_id || '',
                corporate_address: project.builder.corporate_address || '',
                contact: {
                    website: project.builder.contact?.website || '',
                    sales_email: project.builder.contact?.sales_email || '',
                    phone: project.builder.contact?.phone || ''
                }
            }
        });
        setIsEdit(true);
        setIsPopupOpen(true);
    };

    return (
        <AuthenticatedLayout title="Manage Builders">
             <Head title=" Builder" />
            <div className="p-6 bg-gray-50 min-h-screen">
                <div className="max-w-7xl mx-auto">
                    {/* Header */}
                    <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
                        <div>
                            <h1 className="text-3xl font-bold text-gray-900">Builder Management</h1>
                            <p className="text-gray-600 mt-1">Create and manage builders for your projects</p>
                        </div>
                        <button
                            onClick={() => {
                                setForm({
                                    project_id: '',
                                    builder: {
                                        name: '',
                                        logo_image_id: '',
                                        corporate_address: '',
                                        contact: {
                                            website: '',
                                            sales_email: '',
                                            phone: ''
                                        }
                                    }
                                });
                                setIsEdit(false);
                                setIsPopupOpen(true);
                            }}
                            className="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow-md flex items-center gap-2 transition-colors"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fillRule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clipRule="evenodd" />
                            </svg>
                            Add New Builder
                        </button>
                    </div>




                    {/* Table */}
                    <div className="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
                        <div className="overflow-x-auto">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                                        <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Builder</th>
                                        <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                        <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                        <th scope="col" className="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {projects.data.map(project => project.builder ? (
                                        <tr key={project._id} className="hover:bg-gray-50 transition-colors">
                                            <td className="px-6 py-4 whitespace-nowrap">
                                                <div className="text-sm font-medium text-gray-900">{project.project.name}</div>
                                            </td>
                                            <td className="px-6 py-4 whitespace-nowrap">
                                                <div className="text-sm font-medium text-gray-900">{project.builder.name}</div>
                                            </td>
                                            <td className="px-6 py-4">
                                                <div className="text-sm text-gray-600 max-w-xs truncate">{project.builder.corporate_address}</div>
                                            </td>
                                            <td className="px-6 py-4 whitespace-nowrap">
                                                <div className="text-sm text-gray-600">
                                                    {project.builder.contact?.website && (
                                                        <div className="flex items-center mb-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                            </svg>
                                                            <a href={project.builder.contact.website} target="_blank" rel="noopener noreferrer" className="text-blue-600 hover:underline">
                                                                Website
                                                            </a>
                                                        </div>
                                                    )}
                                                    {project.builder.contact?.sales_email && (
                                                        <div className="flex items-center mb-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                            </svg>
                                                            <span>{project.builder.contact.sales_email}</span>
                                                        </div>
                                                    )}
                                                    {project.builder.contact?.phone && (
                                                        <div className="flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                            </svg>
                                                            <span>{project.builder.contact.phone}</span>
                                                        </div>
                                                    )}
                                                </div>
                                            </td>
                                            <td className="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div className="flex justify-end space-x-2">
                                                    <Link
                                                        href={`/builder/${project._id}`}
                                                        className="text-green-600 hover:text-green-900 bg-green-50 hover:bg-green-100 px-3 py-1.5 rounded-md text-sm transition-colors flex items-center"
                                                    >
                                                        <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                        View
                                                    </Link>
                                                    <button
                                                        onClick={() => openEditPopup(project)}
                                                        className="text-indigo-600 hover:text-indigo-900 bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-md text-sm transition-colors flex items-center"
                                                    >
                                                        <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                        Edit
                                                    </button>

                                                </div>
                                            </td>
                                        </tr>
                                    ) : null)}
                                </tbody>
                            </table>
                        </div>

                        {/* Pagination */}
                        <div className="bg-white px-6 py-3 flex flex-col sm:flex-row items-center justify-between border-t border-gray-200">
                            <div className="text-sm text-gray-700 mb-4 sm:mb-0">
                                Showing <span className="font-medium">{projects.from}</span> to <span className="font-medium">{projects.to}</span> of{' '}
                                <span className="font-medium">{projects.total}</span> results
                            </div>
                            <div className="flex space-x-2">
                                {projects.links.map((link, i) => (
                                    <Link
                                        key={i}
                                        href={link.url || '#'}
                                        className={`px-3 py-1 rounded-md text-sm font-medium ${link.active ? 'bg-blue-100 text-blue-600 border border-blue-200' : 'text-gray-500 hover:bg-gray-100'} ${i === 0 ? 'rounded-l-md' : ''} ${i === projects.links.length - 1 ? 'rounded-r-md' : ''}`}
                                        dangerouslySetInnerHTML={{ __html: link.label }}
                                    />
                                ))}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {/* Add/Edit Builder Popup */}
            {isPopupOpen && (
                <div
                    className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
                    onClick={() => setIsPopupOpen(false)}
                >
                    <div
                        className="bg-white rounded-2xl shadow-xl w-full max-w-2xl p-6 relative"
                        onClick={(e) => e.stopPropagation()}
                    >
                        <button
                            onClick={() => setIsPopupOpen(false)}
                            className="absolute top-4 right-4 text-xl font-bold"
                        >
                            &times;
                        </button>
                        <h2 className="text-xl font-semibold mb-4">Add / Edit Builder</h2>

                        <BuilderForm
                            form={form}
                            projects={allProjects}
                            handleChange={handleChange}
                            handleSubmit={handleSubmit}
                            isEdit={isEdit}
                        />
                    </div>
                </div>
            )}

        </AuthenticatedLayout>
    );
};

export default BuilderCreate;