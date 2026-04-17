import { __ } from '@wordpress/i18n';

import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

const TEMPLATE = [
    [
        'core/columns',
        { isStackedOnMobile: true },
        [
            [
                'core/column',
                {},
                [
                    [
                        'core/group',
                        { className: 'cta-wrapper' },
                        [
                            [
                                'core/group',
                                { className: 'cta-image-group' },
                                [
                                    ['core/image', {}]
                                ]
                            ],
                            [
                                'core/group',
                                { className: 'cta-content-group' },
                                [
                                    ['core/heading', { level: 3, placeholder: 'Service Title' }],
                                    ['core/button', { text: 'Learn More' }]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

export default function Edit() {
    return (
        <div {...useBlockProps()}>
            <InnerBlocks
                template={TEMPLATE}
                templateLock={false}
                allowedBlocks={['core/columns']}
            />
        </div>
    );
}
