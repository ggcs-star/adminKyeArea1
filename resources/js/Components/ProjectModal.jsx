import React from 'react';

const ProjectModal = ({ showModal, closeModal, handleChange, handleSubmit, formData, formErrors, isEdit }) => {
    if (!showModal) return null;

    return (
        <div
            className="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 p-4"
            onClick={closeModal} 
        >
            <div
                className="bg-white rounded-2xl shadow-xl w-full max-w-2xl max-h-[90vh] overflow-y-auto"
                onClick={(e) => e.stopPropagation()}  
            >
                <div className="flex justify-between items-center px-6 py-4 border-b">
                    <h2 className="text-xl font-semibold text-gray-900">
                        {isEdit ? 'Edit Project' : 'Add New Project'}
                    </h2>
                    <button onClick={closeModal} className="text-gray-500 hover:text-gray-700">
                        ✕
                    </button>
                </div>

                <form onSubmit={handleSubmit} className="px-6 py-6 space-y-6">

                    <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-1">
                                Project Name *
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="e.g., Sunset Residences"
                                value={formData.name}
                                onChange={handleChange}
                                className={`block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${formErrors.name ? 'border-red-500' : ''}`}
                            />
                            {formErrors.name && <p className="mt-1 text-sm text-red-600">{formErrors.name}</p>}
                        </div>

                        <div>
                            <label htmlFor="slug" className="block text-sm font-medium text-gray-700 mb-1">
                                Project Slug *
                            </label>
                            <input
                                type="text"
                                id="slug"
                                name="slug"
                                placeholder="e.g., sunset-residences"
                                value={formData.slug}
                                onChange={handleChange}
                                className={`block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${formErrors.slug ? 'border-red-500' : ''}`}
                            />
                            {formErrors.slug && <p className="mt-1 text-sm text-red-600">{formErrors.slug}</p>}
                            <p className="mt-1 text-xs text-gray-500">Use lowercase letters, numbers, and hyphens only</p>
                        </div>
                    </div>

                    <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label htmlFor="type" className="block text-sm font-medium text-gray-700 mb-1">
                                Project Type
                            </label>
                            <input
                                type="text"
                                id="type"
                                name="type"
                                placeholder="e.g., Residential, Commercial"
                                value={formData.type}
                                onChange={handleChange}
                                className={`block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${formErrors.type ? 'border-red-500' : ''}`}
                            />
                            {formErrors.type && <p className="mt-1 text-sm text-red-600">{formErrors.type}</p>}
                        </div>

                        <div>
                            <label htmlFor="status" className="block text-sm font-medium text-gray-700 mb-1">
                                Status
                            </label>
                            <select
                                id="status"
                                name="status"
                                value={formData.status}
                                onChange={handleChange}
                                className={`block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${formErrors.status ? 'border-red-500' : ''}`}
                            >
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>

                            </select>
                            {formErrors.status && <p className="mt-1 text-sm text-red-600">{formErrors.status}</p>}
                        </div>
                    </div>

                    <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label className="block text-sm font-medium text-gray-700 mb-1">
                                Project Reel (Video URL)
                            </label>
                            <input
                                type="text"
                                name="reel"
                                value={formData.reel}
                                onChange={handleChange}
                                placeholder="https://example.com/video.mp4"
                                className={`w-full border border-gray-300 rounded-lg p-2 ${formErrors.reel ? 'border-red-500' : ''}`}
                            />
                            {formErrors.reel && <p className="mt-1 text-sm text-red-600">{formErrors.reel}</p>}
                        </div>

                        <div>
                            <label className="block text-sm font-medium text-gray-700 mb-1">
                                Brochure (PDF URL)
                            </label>
                            <input
                                type="text"
                                name="brochure"
                                value={formData.brochure}
                                onChange={handleChange}
                                placeholder="https://example.com/brochure.pdf"
                                className={`w-full border border-gray-300 rounded-lg p-2 ${formErrors.brochure ? 'border-red-500' : ''}`}
                            />
                            {formErrors.brochure && <p className="mt-1 text-sm text-red-600">{formErrors.brochure}</p>}
                        </div>

                        <div>
                            <label className="block text-sm font-medium text-gray-700 mb-1">
                                Logo Image (Image URL)
                            </label>
                            <input
                                type="text"
                                name="logo_image_id"
                                value={formData.logo_image_id}
                                onChange={handleChange}
                                placeholder="https://example.com/logo.png"
                                className={`w-full border border-gray-300 rounded-lg p-2 ${formErrors.logo_image_id ? 'border-red-500' : ''}`}
                            />
                            {formErrors.logo_image_id && <p className="mt-1 text-sm text-red-600">{formErrors.logo_image_id}</p>}
                        </div>
                    </div>

                    <div className="border-t border-gray-200 pt-6">
                        <h3 className="text-lg font-medium text-gray-900 mb-4">Location Details</h3>
                        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label htmlFor="address" className="block text-sm font-medium text-gray-700 mb-1">
                                    Street Address
                                </label>
                                <input
                                    type="text"
                                    id="address"
                                    name="location.address"
                                    placeholder="e.g., 123 Main Street"
                                    value={formData.location.address}
                                    onChange={handleChange}
                                    className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div>
                                <label htmlFor="city" className="block text-sm font-medium text-gray-700 mb-1">
                                    City
                                </label>
                                <input
                                    type="text"
                                    id="city"
                                    name="location.city"
                                    placeholder="e.g., New York"
                                    value={formData.location.city}
                                    onChange={handleChange}
                                    className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div>
                                <label htmlFor="area" className="block text-sm font-medium text-gray-700 mb-1">
                                    Area/Region
                                </label>
                                <input
                                    type="text"
                                    id="area"
                                    name="location.area"
                                    placeholder="e.g., Manhattan"
                                    value={formData.location.area}
                                    onChange={handleChange}
                                    className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>

                            <div>
                                <label htmlFor="map_description" className="block text-sm font-medium text-gray-700 mb-1">
                                    Map Description
                                </label>
                                <textarea
                                    id="map_description"
                                    name="location.map_description"
                                    placeholder="Description for map integration"
                                    value={formData.location.map_description}
                                    onChange={handleChange}
                                    rows={3}
                                    className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                />
                            </div>
                        </div>
                    </div>

                    <div className="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                        <button
                            type="button"
                            onClick={closeModal}
                            className="px-4 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors"
                        >
                            Cancel
                        </button>
                        <button
                            type="submit"
                            className="px-4 py-2.5 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors"
                        >
                            {isEdit ? 'Update Project' : 'Create Project'}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    );
};

export default ProjectModal;
