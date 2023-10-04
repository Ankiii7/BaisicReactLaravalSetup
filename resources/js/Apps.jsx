import React from 'react';
import { createRoot } from 'react-dom/client'


export const Apps = () => {
  return (
      <h1> Welcome to React+larvel with auth </h1>
  )
}
if (document.getElementById('root')) {
    createRoot(document.getElementById('root')).render(<Apps />)
}