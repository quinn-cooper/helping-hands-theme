import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

export default function save( { attributes } ) {
    const { url } = attributes;

    const blockProps = useBlockProps.save({
        className: 'hhc-link-wrapper',
    });

    return (
        <a href={ url } { ...blockProps }>
            <InnerBlocks.Content />
        </a>
    );
}
