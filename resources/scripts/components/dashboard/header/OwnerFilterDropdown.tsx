import { UserCircle02Icon } from '@hugeicons/core-free-icons';
import { HugeiconsIcon } from '@hugeicons/react';
import { useMemo } from 'react';
import { Button } from '@/components/ui/button';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';

export type OwnerFilterValue = 'owner' | 'shared' | 'all' | 'admin-all';

interface OwnerFilterDropdownProps {
    value: OwnerFilterValue;
    rootAdmin: boolean;
    onChange: (value: OwnerFilterValue) => void;
}

const LABELS: Record<OwnerFilterValue, string> = {
    owner: 'My Servers',
    shared: 'Shared Only',
    all: 'All',
    'admin-all': 'All (Admin)',
};

const OwnerFilterDropdown = ({ value, rootAdmin, onChange }: OwnerFilterDropdownProps) => {
    const items = useMemo(() => {
        const list: OwnerFilterValue[] = ['owner', 'shared', 'all'];
        if (rootAdmin) list.push('admin-all');
        return list;
    }, [rootAdmin]);

    return (
        <DropdownMenu>
            <DropdownMenuTrigger asChild>
                <Button
                    size={'sm'}
                    variant={'secondary'}
                    aria-label={`Owner filter: ${LABELS[value]}`}
                    className='h-11 sm:h-8 px-2 sm:px-3 gap-1 rounded-full hover:cursor-pointer'
                >
                    <div className='flex flex-row items-center gap-1.5'>
                        <HugeiconsIcon size={16} strokeWidth={2} icon={UserCircle02Icon} className='size-4' />
                        <span className='hidden sm:inline'>{LABELS[value]}</span>
                    </div>
                </Button>
            </DropdownMenuTrigger>
            <DropdownMenuContent className='flex flex-col gap-1 z-99999 hover:cursor-pointer' sideOffset={8}>
                {items.map((item) => (
                    <DropdownMenuItem
                        key={item}
                        onSelect={() => onChange(item)}
                        className={value === item ? 'bg-accent/20' : ''}
                    >
                        {LABELS[item]}
                    </DropdownMenuItem>
                ))}
                <DropdownMenuSeparator />
                <DropdownMenuItem onSelect={() => onChange('all')} className='text-red-400'>
                    Reset
                </DropdownMenuItem>
            </DropdownMenuContent>
        </DropdownMenu>
    );
};

export default OwnerFilterDropdown;
