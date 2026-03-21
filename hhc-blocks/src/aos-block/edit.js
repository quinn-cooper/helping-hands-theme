/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls, InnerBlocks } from '@wordpress/block-editor';

import { PanelBody, SelectControl, RangeControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { animation, duration } = attributes;

	return (
		<>
			{/* Animation selection dropdown */}
			<InspectorControls>
				<PanelBody title={__('AOS Animation', 'hhc-blocks')}>

					{/* Animation Controls */}
					<SelectControl
						label={__('Select animation', 'hhc-blocks')}
						value={animation}
						options={[
							{ label: 'Fade up', value: 'fade-up' },
							{ label: 'Fade down', value: 'fade-down' },
							{ label: 'Flip left', value: 'flip-left' },
							{ label: 'Flip right', value: 'flip-right' },
							{ label: 'Flip up', value: 'flip-up' },
							{ label: 'Flip down', value: 'flip-down' },
							{ label: 'Zoom in', value: 'zoom-in' },
							{ label: 'Zoom in up', value: 'zoom-in-up' },
							{ label: 'Zoom in down', value: 'zoom-in-down' },
							{ label: 'Zoom out', value: 'zoom-out' },
							{ label: 'Zoom out up', value: 'zoom-out-up' },
							{ label: 'Zoom out down', value: 'zoom-out-down' },

						]}
						onChange={(value) => setAttributes({ animation: value })}
					/>

					{/* Duration Controls */}
					<RangeControl
					label={__('Animation duration (ms)', 'hhc-blocks')}
					value={duration}
					onChange={(value) => setAttributes({ duration: value })}
					min={0}
					max={8500}
					step={500}
					/>

				</PanelBody>
			</InspectorControls>

			<div {...useBlockProps({
				'data-aos': animation,
				'data-aos-duration': duration})}>
				<InnerBlocks />
			</div>
		</>
	);
}
