import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
    const { url } = attributes;

    const blockProps = useBlockProps({
        className: 'hhc-clickable-group',
    });

    return (
        <>
            <InspectorControls>
                <PanelBody title={ __( 'Link Settings', 'hhc-blocks' ) }>
                    <TextControl
                        label={ __( 'URL', 'hhc-blocks' ) }
                        value={ url }
                        onChange={ ( newUrl ) => setAttributes({ url: newUrl }) }
                        placeholder="https://example.com"
                    />
                </PanelBody>
            </InspectorControls>

            <div { ...blockProps }>
                <InnerBlocks />
            </div>
        </>
    );
}
