import { Controller } from '@sihq/reactive'
import React from 'react';

const Properties = {
    controller: '//'
};

const E404 = Controller(Properties, (): JSX.Element => {
    return <div className="flex flex-1 overflow-hidden h-screen">E404</div>;
})

export default E404;
