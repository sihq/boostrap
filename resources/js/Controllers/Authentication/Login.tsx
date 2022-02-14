import { Controller } from '@sihq/reactive';
import React from 'react';

const Properties = {
    controller: 'App\\Http\\Controllers\\Authentication\\Login',
};

const LoginController = Controller(Properties, (): JSX.Element => {
    return <div className="flex flex-1 overflow-hidden h-screen items-center justify-center">Login</div>;
});

export default LoginController;
